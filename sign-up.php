
<?php

$msg="";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require('PHPMailer/PHPMailer.php');
include_once "PHPMailer/Exception.php";
require('PHPMailer/SMTP.php');

if(isset($_POST['submit'])) {
    include "./php/connection.php";
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $user = mysqli_real_escape_string($conn,$_POST['user']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirmation = mysqli_real_escape_string($conn,$_POST['confirmation']);
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = "./images/".$image ;
    
    if($email == "" || $user == "" || $password != $confirmation){
        $msg = "Please check your inputs";
    } else if($image_size > 2000000){
        $msg = "Image size is too large";
    }else{
        $sql = mysqli_query($conn,"SELECT id from user WHERE email='$email' AND name='$user'");
        if(mysqli_num_rows($sql) > 0){
           $msg = "This email and user already exists";
        }else{
            $token = "KAHSDBKASJBKlnsldhao1-9u1p240127t419284ouwlcll";
            $token = str_shuffle($token);
            $token = substr($token,0,10);

            $hashedPassword = password_hash($password,PASSWORD_BCRYPT);

            $insert = mysqli_query($conn,"INSERT INTO `user` (name,email,password,isEmailConfirmed,token,image,role)
            VALUES ('$user','$email','$hashedPassword','0','$token','$image','user');
            ");

            if($insert)
                move_uploaded_file($image_tmp_name, $image_folder);
            

                $to_email = $email;
                $subject = "Confirmation email";
                $body = " Please click on the link below:<br><br>
                <a href='http://localhost/Nelson/Tourism-website/Tourism-website1/php/confirm.php?email=$email&token=$token'>Click Here</a>";
                $headers = "From: dicoverworld3321@gmail.com";
                if (mail($to_email, $subject, $body, $headers)) {
           $msg="You have been registered. PLease verify your email";
                }else{
           $msg = "Ceva nu a mers bine";
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
                <div class="sticked">
                    <a href="index.php"><svg  class="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 792">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: rgb(255, 255, 255);

                                }
                            </style>
                        </defs>
                        <path class="cls-1"
                            d="M391.64,459.64c-26.12-34.71-28-58.94-24.41-75,5.38-23.9,23.68-31.16,32-58,8.55-27.59,1.16-54.32-6-72,27.71,32.4,31.74,57.12,30,74-2.77,26.84-21.56,38.46-30,75A146,146,0,0,0,391.64,459.64Z" />
                        <path class="cls-1"
                            d="M430.29,460.65c-17.15-17.2-19.67-30.07-18.71-38.7,2.4-21.71,27.5-28,43.71-56.3,11.21-19.58,12.46-39.81,12-53,18.84,34.66,17,54.79,11,67-9.14,18.61-29.47,22.5-41.41,48.25A74.5,74.5,0,0,0,430.29,460.65Z" />
                        <path class="cls-1"
                            d="M236.93,302.83A78.75,78.75,0,0,1,267.71,251q3.5,9.27,7,18.55-4.35,4-8.79,8Q251.35,290.65,236.93,302.83Z" />
                        <path class="cls-1"
                            d="M379.72,243.77a82.56,82.56,0,0,0-76.8,15.08l-7.92-19a96.64,96.64,0,0,1,23.29-6.53C346.28,229.12,369,238.44,379.72,243.77Z" />
                        <polygon class="cls-1"
                            points="311.17 299.74 275.31 269.74 303.1 259.5 309 269.89 329.14 305.13 311.17 299.74" />
                        <path class="cls-1"
                            d="M273.6,204.6,267.72,251l27.34-11.39q-1.35-5.84-2.71-11.66l-9.21-39.53Z" />
                        <path class="cls-1"
                            d="M303.1,259.5c-4.57,8.67-12.47,13.94-20.15,13.25a16.58,16.58,0,0,1-8.26-3.21q-3.49-9.27-7-18.55c1.25-1.86,7-10,17.37-11.67a23.94,23.94,0,0,1,9.93.5,13.6,13.6,0,0,1,9.27,16.85,13.76,13.76,0,0,1-1.18,2.83Z" />
                    </svg></a>
                    <div class="right" id="myTopnav">
                        <ul>
                            <li><a href="excursii.php">EXCURSII &dtrif;</a>
                                <ul class="dropdown">
                                    <li><a href="tips.php">TIPS</li></a>
                                    <li><a href="Transport.php">TRANSPORT</li></a>
                                    <li><a href="galerie.php">GALLERY</li></a>
                                </ul>
                            <li><a href="oferte.php">OFERTE</li></a>
                            <li><a href="about.php">ABOUT</li></a>
                            <li><a href="contact.php">CONTACT US</li></a>
                            </li>
                            <li>
                            <form action="" class="form">
                                    <input type="search" class="inp" required>
                                    <i class="fa fa-magnifying-glass"></i>
                                    <a href="javascript:void(0)" id="clear-btn">Clear</a>
                                </form>     
                        </li>
                        <li><a><i class="fa-solid fa-cart-shopping"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-circle-user"></i></li></a>    
                        </ul>             
                    </div>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa-solid fa-bars"></i>
                      </a>
                </div>
                
            </nav>
        </div>

        <div class="center">
            <div class="video">
                <video muted  autoplay loop >
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
                if($msg!="")
             echo $msg."<br>";
                ?>
                </p>
                </span>
                <div class="info">
                    <p>Dacă esti deja înregistrat <a href="login.php">Login !</a></p>
                    
                </div>
                
                <form action="" method="POST" name="sign-up" enctype="multipart/form-data">
                    <div class="email">
                        <p>Email</p>
                        <i id="em" class="fa-solid fa-envelope"> <input type="email"  name="email" placeholder="Introduceti email-ul dvs."></i>
                    </div>
                    <div class="user-name">
                        <p>Username</p>
                        <i id ="em" class="fa-solid fa-user" > <input type="text" name="user" placeholder="Introdu numele de utilizator" ></i>
                    </div>
                    <div class="user-name">
                        <p>Select photo</p>
                        <i id="em" class="fa-solid fa-image">
                            <input type="file" name="image" accept="image/jpg, image/jpeg, image/png"></i>
                    </div>

                    <div class="parola">
                        <p>Parola</p>
                        <i class="fa-solid fa-lock" id="parola1"> <input type="password" id="password" name="password" placeholder="Introdu parola" ><i class="bi bi-eye-slash" id="myInput"></i> </i>
                    </div>
                    <div class="parola">
                        <p>Confirmă parola</p>
                        <i class="fa-solid fa-lock" id="parola1"> <input type="password" id="password1" name="confirmation" placeholder="Confirma-ți parola" ><i class="bi bi-eye-slash" id="myInput1"></i> </i>
                    </div>
                    <div class="button">
                        <button type="submit" name="submit" value="Register">înregistrați-vă</button>
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    <script src="./js/sign-up.js"></script>
</body>
</html>