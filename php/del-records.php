<?php
include ("connection.php");
$id = $_GET['id'];

$imgQuery = mysqli_prepare($conn, "SELECT `path` from gallery WHERE id_info = ?");
mysqli_stmt_bind_param($imgQuery,'i',$id);
mysqli_stmt_execute($imgQuery);
$result = mysqli_stmt_get_result($imgQuery);

$qr = mysqli_prepare($conn,"DELETE FROM `info` WHERE id=?");
mysqli_stmt_bind_param($qr, 'i', $id);
mysqli_stmt_execute($qr);
$statusDelete = mysqli_stmt_get_result($qr);

while($path = mysqli_fetch_assoc($result)){
$photoPath = ltrim(str_replace('/',"\\",$path['path']),'.');
//ltrim - strge prima aparitie a caracterului in string(string, character)
//str_replace - inlocuieste carcaterul cu alt caracter in string (array|string $search, array|string $replace, array|string $subject)
//aici am modificat forwardslashurile cu backslashurile pentru a putea gasi path imaginii pentru functia unlink care cand sterge ii trebuie path deplin din cadrul PC-ULUI

if(file_exists('.'.$path['path'])){
    unlink(dirname(__DIR__).$photoPath);
    if($statusDelete){
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