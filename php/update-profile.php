<?php
session_start();
$message = "";
include 'connection.php';
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header("location:../login.php");
}


if (isset($_POST['update-profile'])) {
    $update_name = mysqli_real_escape_string($conn, $_POST['name']);
    $update_email = mysqli_real_escape_string($conn, $_POST['email']);

    mysqli_query($conn, "UPDATE `user` SET name = '$update_name', email = '$update_email' WHERE id='$user_id'") or die('query failed');
    $sql = mysqli_query($conn, "SELECT password from user where id = $user_id") or die('query failed');
    $password_fromDB = mysqli_fetch_array($sql);

    $update_pass = mysqli_real_escape_string($conn, $_POST['pass1']);
    $new_pass = mysqli_real_escape_string($conn, $_POST['pass2']);
    $confirm_pass = mysqli_real_escape_string($conn, $_POST['pass3']);

    if (!empty($update_pass) && !empty($new_pass) && !empty($confirm_pass)) {
        if (!password_verify($update_pass, $password_fromDB[0])) {
            $message = "old password is not correct";
        } else {
            if ($new_pass != $confirm_pass) {
                $message = "confirm password not matched";
            } else {
                $confirm_pass_hash = mysqli_real_escape_string($conn, password_hash($_POST['pass3'], PASSWORD_BCRYPT));
                mysqli_query($conn, "UPDATE `user` SET password = '$confirm_pass_hash' WHERE id = '$user_id'") or die('query failed');
                $message = "password updated succesfuly";
            }
        }
    } else {
        $message = "Complete all the inputs;";
    }

    $update_image =  $_FILES['image']['name'];
    $update_image_size = $_FILES['image']['size'];
    $update_image_tmp_name = $_FILES['image']['tmp_name'];
    $update_image_folder = "../images/" . $update_image;

    if (!empty($update_image)) {
        if ($update_image_size > 2000000) {
            $message = "image is too large";
        } else {
            $image_update_query = mysqli_query($conn, "UPDATE `user` SET image='$update_image' WHERE id = '$user_id'") or die('query failed');
            if ($image_update_query) {
                move_uploaded_file($update_image_tmp_name, $update_image_folder);
                $message = "something wrong hapenned";
            }
            $message = "image updated succesfully";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/section-special.css">
    <link rel="stylesheet" href="../css/userdashboard.css">
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>

<body>
    <section>
        <div class="ctn">
            <nav class="navbar">
                <?php include_once "../navbar.php"; ?>
            </nav>
        </div>

        <div class="section">
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM `user` WHERE id='$user_id' ");
            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
            }
            ?>
            <div class="container">
                <?php
                if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                    $url = "https";
                else $url = "http";
                $url .= "://";
                $url .= $_SERVER['HTTP_HOST'];
                $url .= $_SERVER['PHP_SELF'];
                $directory = basename(dirname($url));
                if ($row['image'] == '') {
                    echo '<img src="../images/default-avatar.png">';
                } else { ?>
                    <div class="circular--portrait"><img src="<?php echo $directory === "php" ? "../images/" : "images/";
                                                                echo $image; ?>"></div>
                <?php
                }
                ?>
                <?php
                if (isset($message)) {
                    // foreach($message as $mesaj){
                    echo '<div class="error">' . $message . '</div>';
                    // }
                }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="ctn1">
                        <div class="left-ctn">
                            <label>username:</label>
                            <input type="text" name="name" value="<?php echo $row['name'] ?>">
                            <label>your email:</label>
                            <input type="text" name="email" value="<?php echo $row['email'] ?>">
                            <label>update your profile image:</label>
                            <input type="file" name="image" accept="image/jpg, image/jpeg, image/png">
                        </div>
                        <div class="right-ctn">
                            <label>old password:</label>
                            <input type="password" name="pass1" placeholder="enter your previous password">
                            <label>new password:</label>
                            <input type="password" name="pass2" placeholder="enter new password">
                            <label>confirm password:</label>
                            <input type="password" name="pass3" placeholder="confirm new password">
                        </div>
                    </div>
                    <div class="senders">
                        <button type="submit" name="update-profile" value="update-profile">update profile</button>
                    </div>
                </form>
                <form action="../userdashboard.php" class="back">
                    <div class="senders">
                        <a href=""><button>go back</button></a>
                    </div>
                </form>
            </div>
    </section>
</body>
<script src="../js/implementNavbar.js" type="module"></script>

</html>