<?php
include "connection.php";

$to_email = "ergannelumail.com";
$subject = "Confirmation email";
$body = " Please click on the link below:<br><br>";

if (mail($to_email, $subject, $body)) {
$msg="You have been registered. PLease verify your email";
}else{
$msg = "Something wrong with mail confirmation";
}

echo $msg;
?>