<?php
include "connection.php";

function redirect()
{
    header("Location:../sign-up.php");
    exit();
}
if (!isset($_GET['email']) || !isset($_GET['token'])) {
    redirect();
    $msg = "You can now login, you are registered";
} else {

    $email = mysqli_real_escape_string($conn, $_GET['email']);
    $token = mysqli_real_escape_string($conn, $_GET['token']);
    $isEmailConfirmed = 0;
    
    $stmt = mysqli_prepare($conn, "SELECT id FROM USER WHERE email = ? AND token = ?  AND isEmailConfirmed= ? ");
    mysqli_stmt_bind_param($stmt, 'ssi', $email, $token, $isEmailConfirmed);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $stmt2 = mysqli_prepare($conn, "UPDATE user SET isEmailConfirmed=?, token='' WHERE email=? ");
        $isEmailConfirmed = 1;
        mysqli_stmt_bind_param($stmt2, 'is', $isEmailConfirmed, $email);
        mysqli_stmt_execute($stmt2);
        header("Location:../login.php");
    } else {
        redirect();
    }
} 