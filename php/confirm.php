<?php
include "connection.php";

function redirect(){
    header("Location:../sign-up.php");
    exit();
}
if(!isset($_GET['email']) || !isset($_GET['token'])){
    redirect();
    $msg = "You can now login, you are registered";
}else{
    
    $email = mysqli_real_escape_string($conn,$_GET['email']);
    $token = mysqli_real_escape_string($conn,$_GET['token']);

    $sql = mysqli_query($conn,"SELECT id FROM USER WHERE email='$email' AND token='$token' AND isEmailConfirmed=0");

    if(mysqli_num_rows($sql) > 0){
        mysqli_query($conn, "UPDATE user SET isEmailConfirmed=1, token='' WHERE email='$email' ");
        header("Location:login.php");
    }else{
        redirect();
    }
}
?>