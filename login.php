<?php
session_start();
if(isset($_SESSION['user_id'])){
    header("location:userdashboard.php");
}else{
$msg="";
if(isset($_POST['submit'])) {
    include "./php/connection.php";
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if($email == "" || $password == "")
        $msg = "Please check your inputs";
    else{
        $stmt = mysqli_prepare($conn,"SELECT id, password, isEmailConfirmed from user WHERE email=?");
        mysqli_stmt_bind_param($stmt,'s',$email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) > 0){
            $data=mysqli_fetch_array($result); 
         if(password_verify($password,$data['password'])) {
            if($data['isEmailConfirmed'] == 0){
                $msg="PLease verify your email";
            }else{
                    $_SESSION['user_id'] = $data[0];
                    header("location:./userdashboard.php");
                }
         }else{
            $msg = "Please check your inputs";
         }
        }else{
            $msg = "Incorrect email or password";
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
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Login</title>
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
                    <p>Sign in</p>
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
                    <p>Dacă nu ai un cont înregistrat</p>
                    <p>Te poți <a href="sign-up.php">Înregistra aici !</a></p>
                </div>

                <form action="" method="POST">
                    <div class="email">
                        <p>Email</p>
                        <i id="em" class="fa-solid fa-envelope">
                            <input type="email" name="email" placeholder="Introduceti email-ul dvs."></i>
                    </div>
                    <div class="parola">
                        <p>Parola</p>
                        <i class="fa-solid fa-lock" id="parola1">
                            <input type="password" name="password" id="password" placeholder="Introdu parola"><i
                                class="bi bi-eye-slash" id="myInput"></i> </i>
                    </div>
                    <div class="button">
                        <button type="submit" name="submit" value="submit">Login</button>
                    </div>

                </form>
                <div class="remember">
                    <p><input type="checkbox" id="check">Remember me</p>
                </div>

                <div class="social">
                    <p>
                        continuă cu
                    </p>
                    <div class="icons">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-github"></i>
                        <i class="fa-brands fa-google"></i>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    <script src="./js/login.js" type="module"></script>
</body>

</html>