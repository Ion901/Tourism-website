<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once "php/connection.php";
$image = "";
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    
    $stmt = mysqli_prepare($conn, "SELECT image FROM `user` WHERE id=?");
    mysqli_stmt_bind_param($stmt,'i',$user_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) > 0 ){
        $image = mysqli_fetch_column($result);
    }
} else {
    $image = false;
}

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https";
else $url = "http";

$url .= "://";
$url .= $_SERVER['HTTP_HOST'];
$url .= $_SERVER['PHP_SELF'];

$currentDir = basename(__DIR__);
$isPhpFolder = ($currentDir === "php");
$prefix = $isPhpFolder ? "../" : "";

?>

<div class="sticked">
    <a href="<?= $prefix  ?>index.php"> <?php include_once "images/logo.svg" ?></a>
    <div class="right" id="myTopnav">
        <ul>
            <li><a href="<?= $prefix  ?>excursii.php">EXCURSII &dtrif;</a>
                <ul class="dropdown">
                    <li><a href="<?= $prefix  ?>tips.php">TIPS</li></a>
                    <li><a href="<?= $prefix  ?>Transport.php">TRANSPORT</li></a>
                    <li><a href="<?= $prefix  ?>galerie.php">GALLERY</li></a>
                </ul>
            <li><a href="<?= $prefix  ?>oferte.php">OFERTE</li></a>
            <li><a href="<?= $prefix  ?>about.php">ABOUT</li></a>
            <li><a href="<?= $prefix  ?>contact.php">CONTACT US</li></a>
            </li>
            <li>
                <form action="" class="form">
                    <input type="search" class="inp" required>
                    <i class="fa fa-magnifying-glass"></i>
                    <a href="<?= $prefix  ?>javascript:void(0)" id="clear-btn">Clear</a>
                </form>
            </li>
            <li>
                <a class="cart-default">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </li>
            <li>
                <a href="<?= $prefix  ?>login.php">
                    <?php

                    if (!$image) {
                        echo '<i class="fa-solid fa-circle-user"></i>';
                    } else {
                    ?>
                    <div class="circular--portrait--navbar">
                        <img src="<?php echo $directory === "php" ? "../images/" : "images/";
                                        echo $image; ?>" loading="lazy">
                    </div>
                    <?php
                    }
                    ?>
                </a>
            </li>
        </ul>
    </div>
    <div class="top-button">
        <a href="javascript:void(0);" class="icon">
            <i class="fa-solid fa-bars" id="burger"></i>
        </a>
    </div>
</div>