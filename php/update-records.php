<?php
include "connection.php";
if($_POST['city'] && $_POST['country'] && $_POST['price'] && $_POST['durata'] && $_POST['detalii'] ){
    $id = $_GET['id']; 
    $city = $_POST['city']; 
    $country = $_POST['country']; 
    $price = $_POST['price']; 
    $durata = $_POST['durata']; 
    $detalii = $_POST['detalii']; 
    $sql = mysqli_query($conn,"UPDATE `info` SET country = '$country' ,city = '$city',
    price = '$price',durata = '$durata',detalii = '$detalii' WHERE id = '{$id}'");
    header("location:../admindashboard.php");
}else{
    header("location:edit-records.php");
}




?>