<?php
session_start();

if(isset($_POST['submit'])){
    if(!isset($_POST['visitor_name']) && !isset($_POST['visitor_email'])&& !isset($_POST['visitor_email']) && !isset($_POST['visitor_phone']) && !isset($_POST['total_adults']) && !isset($_POST['total_children']) && !isset($_POST['checkin']) && !isset($_POST['checkout']) && !isset($_POST['room-preference']) && !isset($_POST['visitor_message'])){
    $msg = $_SESSION['msg'] = "Check the inputs";
    header("location:book.php");
    }else{
    $_SESSION['name'] = $_POST['visitor_name'];
    $_SESSION['email'] = $_POST['visitor_email'];
    $_SESSION['phone'] = (int) $_POST['visitor_phone'];
    $_SESSION['adults'] = (int) $_POST['total_adults'];
    $_SESSION['children'] =(int) $_POST['total_children'];
    $_SESSION['checkin'] = ($_POST['checkin']); 
    $_SESSION['checkout'] = ($_POST['checkout']); 
    $_SESSION['preference'] = $_POST['room_preference'];
    $_SESSION['note'] = $_POST['visitor_message'];
    $_SESSION['msg'] = "Datele au fost trimise";
    }

    header("location:../detalii.php?city=".$_SESSION['city']."");
  }
?>