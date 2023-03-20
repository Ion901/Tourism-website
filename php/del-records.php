<?php
include ("connection.php");
$id = $_GET['id'];
$qr = mysqli_query($conn,"DELETE FROM `elevi` WHERE id=$id");

if($qr){
    echo "<script>alert(\"Row Deleted\");</script>";
    header("Location:../admindashboard.php");
}else{
    echo "<script>alert(\"Row is not Deleted\");</script>";
}

?>