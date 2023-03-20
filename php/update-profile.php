<?php
session_start();
$message="";
include 'connection.php';
 $user_id = $_SESSION['user_id'];

 if(empty($user_id)){
    header("location:../login.php");
 }
 

if(isset($_POST['update-profile'])){
    $update_name = mysqli_real_escape_string($conn,$_POST['name']);
    $update_email = mysqli_real_escape_string($conn,$_POST['email']);
    
    mysqli_query($conn,"UPDATE `user` SET name = '$update_name', email = '$update_email' WHERE id='$user_id'") or die('query failed');
    
    $old_pass = $_POST['old_pass'];
    $update_pass = mysqli_real_escape_string($conn,password_hash($_POST['pass1'],PASSWORD_BCRYPT)); 
    $new_pass = mysqli_real_escape_string($conn,password_hash($_POST['pass2'],PASSWORD_BCRYPT));
    $confirm_pass = mysqli_real_escape_string($conn,password_hash($_POST['pass3'], PASSWORD_BCRYPT));
    
    if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
        if($update_pass != $old_pass){
            $message = "old password now matched";
        }else if($new_pass != $confirm_pass){
            $message="confirm password not matched";
        }else{
            mysqli_query($conn,"UPDATE `user` SET password = '$confirm_pass' WHERE id = '$user_id'") or die ('query failed');
            $message="password updated succesfuly";
        }
    }
    $update_image =  $_FILES['image']['name'];
    $update_image_size = $_FILES['image']['size'];
    $update_image_tmp_name = $_FILES['image']['tmp_name'];
    $update_image_folder = "../images/".$update_image ;
        
    if(!empty($update_image)){
        if($update_image_size > 2000000){
            $message = "image is too large";
        }else{
            $image_update_query = mysqli_query($conn, "UPDATE `user` SET image='$update_image' WHERE id = '$user_id'") or die('query failed');
            if($image_update_query){
                move_uploaded_file($update_image_tmp_name,$update_image_folder);
                $message="something wrong hapenned";
            }
            $message="image updated succesfully";
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
                <div class="sticked">
                    <a href="../index.php"><svg class="Layer_1" data-name="Layer 1"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 792">
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
                            <li><a href="login.php"><i class="fa-solid fa-circle-user"></i></li></a>

                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
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
            if($row['image'] == ''){
                echo '<img src="../images/default-avatar.png">';
                }else{ ?>
                    <div class="circular--portrait"><img src="../images/<?php echo $row['image'];?>"></div>
                <?php
                }
            ?> 
            <?php
            if(isset($message)){
            // foreach($message as $mesaj){
                echo '<div class="error">'.$message.'</div>';
            // }
        }
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="ctn1">
                    <div class="left-ctn">
                    <label>username:</label>
                    <input type="text" name="name" value="<?php echo $row['name']?>">
                    <label>your email:</label>
                    <input type="text" name="email" value="<?php echo $row['email']?>">
                    <label>update your profile image:</label>
                    <input type="file" name="image" accept="image/jpg, image/jpeg, image/png">
                    </div>
                    <div class="right-ctn">
                        <input type="hidden" name="old_pass" value="<?php $row['password']?>">
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
                <a href=""><button >go back</button></a>
            </div>
            </form>
        </div>  
        </section>
</body>
<script src="../js/profile.js"></script>
</html>