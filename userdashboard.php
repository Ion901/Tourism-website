<?php
session_start();
include "./php/connection.php";

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header("location:./login.php");
}

$sql = mysqli_query($conn, "SELECT * FROM `user` WHERE id='$user_id' ");
if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
} else {
    header("location:./login.php");
}

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header("location:./login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/userdashboard.css">
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>

<body>
    <section>
        <div class="ctn">
            <nav class="navbar">
                <?php include_once "navbar.php"; ?>
            </nav>
        </div>
        <div class="container">
            <?php
            if ($row['image'] == '') {
                echo '<img src="./images/default-avatar.png" loading="lazy">';
            } else { ?>
            <div class="circular--portrait"> <img class="image" src="./images/<?php echo $row['image']; ?>"
                    loading="lazy"></div>
            <?php
            }
            ?>
            <h3><?php echo $row['name'] ?></h3>
            <ul>
                <a href="./php/update-profile.php">
                    <li class="update">Your profile</li>
                </a>
                <a href="./cart.php">
                    <li class="cart-content">Your cart</li>
                </a>
                <?php
                if ($row['role'] == "admin") { ?>
                <a href="./admindashboard.php">
                    <li class="cart-content">Admin Panel</li>
                </a>
                <?php
                }
                ?>
                <a href="./userdashboard.php?logout=<?php echo $user_id; ?>">
                    <li class="logout">Logout</li>
                </a>
            </ul>

        </div>
    </section>
</body>
<script src="./js/implementNavbar.js" type="module"></script>

</html>