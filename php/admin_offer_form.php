    <?php
    session_start();
    include "connection.php";
    $user_id = $_SESSION['user_id'];
    if (!isset($user_id)) {
        header("location:../login.php");
    }
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $countryErr = $cityErr = $priceErr = $durataErr = $detaliiErr = $disponibilityErr = $imagesErr = "";
    $country = $city = $price = $durata = $detalii = $disponibility = $images = " ";

    if (isset($_POST['submit'])) {

        if (empty($_POST["country"])) {
            $countryErr = "* Country is required";
        } else {
            $country = input_data($_POST["country"]);
        }


        if (empty($_POST["city"])) {
            $cityErr = "* City is required";
        } else {
            $city = input_data($_POST["city"]);
        }


        if (empty($_POST["price"])) {
            $priceErr = "* Price is required";
        } else {
            $price = input_data($_POST["price"]);
        }


        if (empty($_POST["durata"])) {
            $durataErr = "* Duration is required";
        } else {
            $durata = input_data($_POST["durata"]);
        }


        if (empty($_POST["detalii"])) {
            $detaliiErr = "* Details are required";
        } else {
            $detalii = input_data($_POST["detalii"]);
        }

        if (empty($_POST["disponibility"])) {
            $disponibilityErr = "* Disponibility date is required";
        } else {
            $disponibility = input_data($_POST["disponibility"]);
        }

        if (empty($_FILES['images']['tmp_name']) || count($_FILES['images']['tmp_name']) < 4) {
            $imagesErr = "* At least 4 photo is required";
        }
    }
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/admyn.css">
        <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
        <title>Add Oferte</title>
    </head>

    <body>
        <section>
            <div class="formular-add">

                <h2>Add New Offer</h2>
                <span class="error"><?= $erorMsg ?? "* Required Field" ?></span>

                <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="country">Country:</label>
                        <input type="text" id="country" name="country">
                        <span class="error"><?= $countryErr ?? ""; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city">
                        <span class="error"><?= $cityErr ?? ""; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" id="price" name="price" min="0">
                        <span class="error"><?= $priceErr ?? ""; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="durata">Duration:</label>
                        <input type="text" id="durata" name="durata">
                        <span class="error"><?= $durataErr ?? ""; ?></span>
                    </div>


                    <div class="form-group">
                        <label for="disponobility">Disponibilitate:</label>
                        <input type="date" id="disponibility" name="disponibility">
                        <span class="error"><?= $disponibilityErr ?? ""; ?></span>
                    </div>

                    <div class="form-group file-input">
                        <label for="image">Select Photo:</label>
                        <input type="file" id="image" name="images[]" accept="image/jpg, image/jpeg, image/png" multiple>
                        <span class="error"><?= $imagesErr ?? ""; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="detalii">Details:</label>
                        <textarea id="detalii" name="detalii" cols="30" rows="5"></textarea>
                        <span class="error"><?= $detaliiErr ?? ""; ?></span>
                    </div>


                    <input type="submit" name="submit" value="Add">
                    <a href="../admindashboard.php"><input type="button" name="back" value="Go back"></a>
                </form>
                <?php

                $erorMsg = "";
                if (isset($_POST['submit'])) {

                    if ($countryErr == "" && $cityErr == "" && $priceErr == "" && $durataErr == "" && $detaliiErr == "" && $disponibilityErr == "" && $imagesErr == "") {
                        mysqli_begin_transaction($conn);
                        try {

                            $stmt1 = mysqli_prepare($conn, "INSERT INTO `info` (country, city, price, durata, detalii, disponibility) values (?,?,?,?,?,?)");
                            mysqli_stmt_bind_param($stmt1, 'ssisss', $country, $city, $price, $durata, $detalii, $disponibility);
                            mysqli_stmt_execute($stmt1);
                            $id_from_info = mysqli_insert_id($conn);

                            foreach ($_FILES['images']['tmp_name'] as $key => $val) {
                                $image = $_FILES['images']['name'][$key];
                                $image_size = $_FILES['images']['size'][$key];
                                $image_tmp_name = $_FILES['images']['tmp_name'][$key];
                                $image_folder = './images/' . $image;
                                $extension = ['png', 'jpg', 'jpeg'];
                                $ext = pathinfo($image, PATHINFO_EXTENSION);

                                $finalImg = '';

                                if (in_array($ext, $extension) && $image_size < 3500000) {
                                    if (!file_exists($image_folder)) {
                                        $finalImg = $image_folder;
                                    } else {
                                        $image =  str_replace('.', '-', basename($image, $ext));
                                        $newImage = $image . time() . "." . $ext;
                                        $finalImg = './images/' . $newImage;
                                    }

                                    $stmt2 = mysqli_prepare($conn, "INSERT INTO `gallery` (`path`, id_info)  VALUES  (?,?) ");
                                    mysqli_stmt_bind_param($stmt2, 'si', $finalImg, $id_from_info);
                                    mysqli_stmt_execute($stmt2);

                                    move_uploaded_file($image_tmp_name, '.' . $finalImg);
                                } else {
                                    echo "Image is too large or the format is not correct";
                                }
                            }
                            mysqli_commit($conn);
                            echo "Offer succesfully aded";
                        } catch (mysqli_sql_exception $e) {
                            mysqli_rollback($conn);

                            throw $e;
                        }
                    }
                }
                ?>

            </div>
        </section>
    </body>

    </html>