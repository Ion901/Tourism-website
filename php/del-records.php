<?php
include ("connection.php");
$id = $_GET['id'];

$imgQuery = mysqli_query($conn, "SELECT `path` from gallery WHERE id_info = '$id'");
$qr = mysqli_query($conn,"DELETE FROM `info` WHERE id=$id");

while($path = mysqli_fetch_assoc($imgQuery)){
$photoPath = ltrim(str_replace('/',"\\",$path['path']),'.');
//ltrim - strge prima aparitie a caracterului in string(string, character)
//str_replace - inlocuieste carcaterul cu alt caracter in string (array|string $search, array|string $replace, array|string $subject)
//aici am modificat forwardslashurile cu backslashurile pentru a putea gasi path imaginii pentru functia unlink care cand sterge ii trebuie path deplin din cadrul PC-ULUI

if(file_exists('.'.$path['path'])){
    unlink(dirname(__DIR__).$photoPath);
    if($qr){
    echo "<script>alert(\"Row Deleted\");</script>";
    header("Location:../admindashboard.php");
}else{
    echo "<script>alert(\"Row is not Deleted\");</script>";
}
}else{
    echo "This image was deleted";
}
}
?>