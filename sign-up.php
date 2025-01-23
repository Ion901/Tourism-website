<?php

$msg = "";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/PHPMailer.php');
include_once "PHPMailer/Exception.php";
require('PHPMailer/SMTP.php');

function checkPassword($str){
    if(preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,16}$/', $str)){
        return true;
    }
    return false;
}

if (isset($_POST['submit'])) {
    include "./php/connection.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmation = mysqli_real_escape_string($conn, $_POST['confirmation']);


    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = "./images/" . $image;

  

    if ($email == "" || $user == "" || $password != $confirmation) {
        $msg .= "Please check your inputs";
    } else if ($image_size > 2000000) {
        $msg .= "Image size is too large";
    }else if(!checkPassword($password) && !checkPassword($confirmation)){
        $msg .= "<small>Password should contain:<br>*One uppercase letter<br>*One lowercase letter<br>*One symbol<br>*The length should be minimum 8 characters and maximum 16</small>";
    } else {
        $sql = mysqli_query($conn, "SELECT id from user WHERE email='$email' AND name='$user'");
        if (mysqli_num_rows($sql) > 0) {
            $msg = "This email and user already exists";
        } else {
            $token = "KAHSDBKASJBKlnsldhao1-9u1p240127t419284ouwlcll";
            $token = str_shuffle($token);
            $token = substr($token, 0, 10);

            $hashedPassword = mysqli_real_escape_string($conn, password_hash($password, PASSWORD_BCRYPT));

            $insert = mysqli_query($conn,"INSERT INTO `user` (name,email,password,isEmailConfirmed,token,image,role)
            VALUES ('$user','$email','$hashedPassword','0','$token','$image','user');
            ");

            if($insert)
                move_uploaded_file($image_tmp_name, $image_folder);
            $mail = new PHPMailer();

            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'ionerhan13@gmail.com';
            $mail->Password   = 'xajz wguf ucdw jefg';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->SMTPDebug  = 2;
            $mail->Port       = 587;

            $mail->setFrom("ionerhan13@gmail.com");
            $mail->addAddress($email, $user);
            $mail->Subject = "Please verify your email";
            $mail->isHTML(true);
            $mail->Body = "
            To verify your mail, please click on the link below:<br><br>
                <a href='http://localhost/Tourism-website/Tourism-website1/php/confirm.php?email=$email&token=$token'>Click Here</a>
            ";

            $mail->Debugoutput = function ($str, $level) {
                file_put_contents(
                    'C:\xampp\php\log-mail\debug.txt',
                    date('Y-m-d H:i:s'). "\t". $str,
                    FILE_APPEND | LOCK_EX
                );
            };
            

            if ($mail->send()) {
                $msg = "You have been registered. Please verify your email";
            } else {
                $msg = "Something is wrong with mail configuration";
            }
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
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/sign-up.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Sign-up</title>
</head>

<body>
    <section>
        <div class="ctn">
            <nav class="navbar">
            <?php include_once "navbar.php";?>

            </nav>
        </div>

        <div class="center">
            <div class="video">
                <video muted autoplay loop>
                    <source src="./images/video.mp4" style="height: 1200px;" type="video/mp4">
                </video>
            </div>
            <div class="content">
                <div class="signin">
                    <p>Register</p>
                </div>
                <span class="error">
                    <p>
                        <?php
                        if ($msg != "")
                            echo $msg . "<br>";
                        ?>
                    </p>
                </span>
                <div class="info">
                    <p>Dacă esti deja înregistrat <a href="login.php">Login !</a></p>

                </div>

                <form action="" method="POST" name="sign-up" enctype="multipart/form-data">
                    <div class="email">
                        <p>Email</p>
                        <i id="em" class="fa-solid fa-envelope"> <input type="email" name="email" placeholder="Introduceti email-ul dvs."></i>
                    </div>
                    <div class="user-name">
                        <p>Username</p>
                        <i id="em" class="fa-solid fa-user"> <input type="text" name="user" placeholder="Introdu numele de utilizator"></i>
                    </div>
                    <div class="user-name">
                        <p>Select photo</p>
                        <i id="em" class="fa-solid fa-image">
                            <input type="file" name="image" accept="image/jpg, image/jpeg, image/png"></i>
                    </div>

                    <div class="parola">
                        <p>Parola</p>
                        <i class="fa-solid fa-lock" id="parola1"> <input type="password" id="password" name="password" placeholder="Introdu parola"><i class="bi bi-eye-slash" id="myInput"></i> </i>
                    </div>
                    <div class="parola">
                        <p>Confirmă parola</p>
                        <i class="fa-solid fa-lock" id="parola1"> <input type="password" id="password1" name="confirmation" placeholder="Confirma-ți parola"><i class="bi bi-eye-slash" id="myInput1"></i> </i>
                    </div>
                    <div class="button">
                        <button type="submit" name="submit" value="Register">înregistrați-vă</button>
                    </div>
                </form>

            </div>
        </div>
        </div>
    </section>
    <script src="./js/sign-up.js" type="module"></script>
</body>

</html>