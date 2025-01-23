<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once "php/connection.php";
$image = "";
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $sql1 = mysqli_query($conn, "SELECT image FROM `user` WHERE id='$user_id'");
    if (mysqli_num_rows($sql1) > 0) {
        $image = mysqli_fetch_column($sql1);
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
$directory = basename(dirname($url));

?>

<div class="sticked">
    <a href="<?php echo $directory === "php" ? "../" : ""  ?>index.php"> <?php include_once "images/logo.svg" ?></a>
    <div class="right" id="myTopnav">
        <ul>
            <li><a href="<?php echo $directory === "php" ? "../" : ""  ?>excursii.php">EXCURSII &dtrif;</a>
                <ul class="dropdown">
                    <li><a href="<?php echo $directory === "php" ? "../" : ""  ?>tips.php">TIPS</li></a>
                    <li><a href="<?php echo $directory === "php" ? "../" : ""  ?>Transport.php">TRANSPORT</li></a>
                    <li><a href="<?php echo $directory === "php" ? "../" : ""  ?>galerie.php">GALLERY</li></a>
                </ul>
            <li><a href="<?php echo $directory === "php" ? "../" : ""  ?>oferte.php">OFERTE</li></a>
            <li><a href="<?php echo $directory === "php" ? "../" : ""  ?>about.php">ABOUT</li></a>
            <li><a href="<?php echo $directory === "php" ? "../" : ""  ?>contact.php">CONTACT US</li></a>
            </li>
            <li>
                <form action="" class="form">
                    <input type="search" class="inp" required>
                    <i class="fa fa-magnifying-glass"></i>
                    <a href="<?php echo $directory === "php" ? "../" : ""  ?>javascript:void(0)" id="clear-btn">Clear</a>
                </form>
            </li>
            <li>
                <a class="cart-default">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo $directory === "php" ? "../" : ""  ?>login.php">
                    <?php

                    if (!$image) {
                        echo '<i class="fa-solid fa-circle-user"></i>';
                    } else {
                    ?>
                        <div class="circular--portrait--navbar">
                            <img src="<?php echo $directory === "php" ? "../images/" : "images/";
                                        echo $image; ?>">
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