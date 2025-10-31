<?php
session_start();
include("connection.php");

$id = $_GET['id'];

$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
    header("location:../login.php");
}

$stmt = mysqli_prepare($conn, "SELECT * FROM `user` WHERE id= ? ");
mysqli_stmt_bind_param($stmt, 'i', $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}

if ($row['role'] == "user") {
    header("location:userdashboard.php");
}

$sql1 = mysqli_prepare($conn, "SELECT * FROM `info` WHERE info.id=?") or die(mysqli_error($conn));
    mysqli_stmt_bind_param($sql1,'i',$id);
    mysqli_stmt_execute($sql1);
    $result1 = mysqli_stmt_get_result($sql1);
    
$sql2 = mysqli_prepare($conn, "SELECT `id`, `path` FROM `gallery` WHERE id_info=?") or die(mysqli_error($conn));
    mysqli_stmt_bind_param($sql2, 'i', $id);
    mysqli_stmt_execute($sql2);
    $result2 = mysqli_stmt_get_result($sql2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <link rel="stylesheet" href="../css/edit-records.css">
</head>

<body>
    <?php while ($row = mysqli_fetch_row($result1)) : ?>
    <div class="form-container">
        <p><?= $_GET['error'] ?? $_GET['success'] ?? "" ?></p>
        <h2>Edit Record</h2>
        <form action="update-records.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= htmlspecialchars($row[0]); ?>">

            <label for="city">Country:</label>
            <input type="text" name="country" id="country" value="<?= htmlspecialchars($row[1]); ?>" required>

            <label for="country">City:</label>
            <input type="text" name="city" id="city" value="<?= htmlspecialchars($row[2]); ?>" required>

            <label for="price">Price:</label>
            <input type="text" name="price" id="price" value="<?= htmlspecialchars($row[3]); ?>" required>

            <label for="durata">Duration:</label>
            <input type="text" name="durata" id="durata" value="<?= htmlspecialchars($row[4]); ?>" required>

            <label for="detalii">Details:</label>
            <textarea name="detalii" id="detalii" cols="30" rows="5"><?= htmlspecialchars($row[5]); ?></textarea>

            <label for="image">Image</label>
            <div>
                <?php if (mysqli_num_rows($result2) > 0): ?>
                <?php while ($row = mysqli_fetch_row($result2)) : ?>
                <?php $imageSrc = is_null($row) ? "" : htmlspecialchars($row[1]); ?>
                <div class="img-selector">
                    <img loading="lazy" class="admin-edit-photo myImg" id="myImg1" src=".<?php echo $imageSrc; ?>"
                        alt="error">
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="admin-edit-photo modal-content" id="img01" alt="image not present" loading="lazy"
                            src=".<?php echo $imageSrc; ?>">
                    </div>
                    <input type="file" name="image[]" id="image" accept="image/jpg, image/jpeg, image/png">
                    <input type="hidden" name="id_gallery[]" value=<?= htmlspecialchars($row[0]) ?>>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <div class="img-selector">
                    <img loading="lazy" class="admin-edit-photo myImg" id="myImg1" src="" alt="error">
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="admin-edit-photo modal-content" id="img01" loading="lazy" alt="image not present"
                            src="">
                    </div>
                    <input type="file" name="image[]" id="image" accept="image/jpg, image/jpeg, image/png">
                </div>
                <?php endif; ?>

            </div>


            <div class="button-group">
                <button type="submit" class="submit-btn">Save Changes</button>
                <a href="../admindashboard.php">
                    <button type="button" class="cancel-btn">Cancel</button>
                </a>
            </div>
        </form>
    </div>
    <?php endwhile; ?>
</body>
<script src="../js/edit-records.js"></script>

</html>