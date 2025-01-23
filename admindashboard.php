<?php
session_start();
include "./php/connection.php";
if (isset($_GET['id']))
    $id = $_GET['id'];

    $user_id = $_SESSION['user_id'];
    if(!isset($user_id)){
        header("location:login.php");
    }

    $sql = mysqli_query($conn, "SELECT * FROM `user` WHERE id='$user_id' ");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
    }

    if($row['role'] == "user"){
        header("location:userdashboard.php");
    }

$sqlInfo = mysqli_query($conn, "SELECT info.*, gallery.path FROM `info` LEFT JOIN gallery ON info.id = gallery.id_info GROUP BY info.id;");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/admin.css">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="ctn">
            <nav class="navbar">
            <?php include_once "navbar.php";?>
            </nav>
        </div>
        <div class="tabel2">
            <form action="./php/admin_offer_form.php" method="post">
                <button type="submit" class="add">Add offer</button>
            </form>
        </div>
        <?php
        echo "<table class=\"tabel\"  cellspacing=\"0\" cellpadding=\"10\">";
        echo "<tr class=\"first\"><td>Id</td><td>Country</td><td>City</td><td>Price</td><td>Durata</td><td>Detalii</td><td>Photos</td><td>Actions</td></tr>";

        while ($row = mysqli_fetch_row($sqlInfo)) {

            $id = $row[0];
            $_SESSION['id'] = $id;
            echo "<tr>
                 <td>$row[0]</td>
                 <td>$row[1]</td>
                 <td>$row[2]</td>
                 <td>$row[3]</td>
                 <td>$row[4]</td>
                 <td>$row[5]</td>
                 <td>
                 <img loading=\"lazy\" class=\"admin-edit-photo myImg\" id=\"myImg\" src=\"$row[9]\" alt=\"no image\">
                 <div id=\"myModal\" class=\"modal\">
                    <span class=\"close\">&times;</span>
                    <img class=\"modal-content\" id=\"img01\">
                   </div>
                </td>
               <td > 
               <div class=\"edit_tab\">
                &nbsp<a href=\"./php/edit-records.php?id={$id} \" id = \"primu\"><i class=\"fa-sharp fa-solid fa-pen-to-square\"></i></a>
                    <a href=\"./php/del-records.php?id={$id} \"id = \"doi\"><i class=\"fa-solid fa-trash\"></i></a> &nbsp
                    </div>
                </td>
                </tr>";
        }

        echo "</table>";
        ?>
    </section>
    <script type="module" src="./js/implementNavbar.js"></script>
</body>

</html>