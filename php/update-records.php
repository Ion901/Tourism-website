<?php
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // Collect input data
    $id = $_POST['id'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $price = (int)$_POST['price'];
    $durata = $_POST['durata'];
    $detalii = $_POST['detalii'];
    $galleryIds = $_POST['id_gallery'];

    // Validate required fields
    if (empty($id) || empty($city) || empty($country) || empty($price) || empty($durata) || empty($detalii)) {
        header("Location: edit-records.php?id=$id&error=Missing required fields");
        exit;
    }

    // Fetch current record to check for changes
    $query = "SELECT * FROM info WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) === 0) {
        header("Location: ../admindashboard.php?error=Record not found");
        exit;
    }

    $current = mysqli_fetch_assoc($result);
    $updates = [];

    // Identify changes in `info` table fields
    if ($current['city'] !== $city) $updates[] = "city = '$city'";
    if ($current['country'] !== $country) $updates[] = "country = '$country'";
    if ($current['price'] !== $price) $updates[] = "price = '$price'";
    if ($current['durata'] !== $durata) $updates[] = "durata = '$durata'";
    if ($current['detalii'] !== $detalii) $updates[] = "detalii = '$detalii'";

    // Update `info` table if there are changes
    if (!empty($updates)) {
        $updateQuery = "UPDATE `info` SET " . implode(", ", $updates) . " WHERE id = ?";
        $updateStmt = mysqli_prepare($conn, $updateQuery);
        mysqli_stmt_bind_param($updateStmt, "i", $id);

        if (!mysqli_stmt_execute($updateStmt)) {
            header("Location: edit-records.php?id=$id&error=Failed to update record");
            exit;
        }
    }else{
        header("Location: edit-records.php?id=$id&error=No records updated");
        exit;
    }

    // Handle image uploads and updates
    if (!empty($_FILES['image']['name'][0])) {
        // Fetch current image paths from the database
        $qr = "SELECT `path` FROM gallery WHERE id_info = ?";
        $stmt1 = mysqli_prepare($conn, $qr);
        mysqli_stmt_bind_param($stmt1, 'i', $id);
        mysqli_stmt_execute($stmt1);
        $result2 = mysqli_stmt_get_result($stmt1);
        $path_img_arrDB = mysqli_fetch_all($result2, MYSQLI_ASSOC);

        // Extract image paths from the database into an array
        $pathStrings = array_column($path_img_arrDB, 'path'); // returneaza un nou array care cauta dupa conditia in al doilea parametru

        foreach ($galleryIds as $index => $galleryId) {
            $image = $_FILES['image']['name'][$index];
            $image_tmp_name = $_FILES['image']['tmp_name'][$index];
            $image_size = $_FILES['image']['size'][$index];
            $image_folder = './images/' . $image;
            $ext = pathinfo($image, PATHINFO_EXTENSION);
            $allowedExtensions = ['jpg', 'jpeg', 'png'];

            // Validate and process the image
            if ($image_tmp_name && is_uploaded_file($image_tmp_name)) {
                if (in_array($ext, $allowedExtensions) && $image_size < 3.5 * 1024 * 1024) {
                    if (!file_exists('.' . $image_folder) && !in_array($image_folder, $pathStrings)) {
                        // Get the current path of the image to be updated
                        $qr2 = "SELECT `path` FROM gallery WHERE id = ?";
                        $stmt2 = mysqli_prepare($conn, $qr2);
                        mysqli_stmt_bind_param($stmt2, 'i', $galleryId);
                        mysqli_stmt_execute($stmt2);
                        $result2 = mysqli_stmt_get_result($stmt2);
                        $pathF = mysqli_fetch_column($result2);

                        // Delete the old file
                        $photoPath = ltrim(str_replace('/', "\\", $pathF), '.');
                        unlink(dirname(__DIR__) . $photoPath);

                        // Update the database with the new path
                        $stmt = mysqli_prepare($conn, "UPDATE `gallery` SET `path` = ? WHERE `id` = ?");
                        mysqli_stmt_bind_param($stmt, 'si', $image_folder, $galleryId);
                        mysqli_stmt_execute($stmt);

                        // Move the uploaded file to the designated folder
                        move_uploaded_file($image_tmp_name, '.' . $image_folder);

                        header("Location: edit-records.php?id=$id&success=Image was successfully updated");
                        exit;
                    } else {
                        header("Location: edit-records.php?id=$id&error=This image is already used");
                        exit;
                    }
                }
            }
        }
    }

    header("Location: edit-records.php?id=$id&success=Record updated successfully");
    exit;
} else {
    header("Location: ../admindashboard.php?error=Invalid request");
    exit;
}
