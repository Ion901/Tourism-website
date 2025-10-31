<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/oferte.css">
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
    <title>oferte</title>
</head>

<body>
    <section>
        <div class="ctn">
            <nav class="navbar">
                <?php include_once "navbar.php"; ?>
            </nav>
        </div>

        <div class="offer_ctn">
            <div class="offer">
                <?php

                include "php/connection.php";
                $id_offer=1;
                $stmt = mysqli_prepare($conn, "SELECT * FROM `info` LEFT JOIN `gallery` ON info.id = gallery.id_info WHERE info.is_offer = ? GROUP BY gallery.id_info");
                mysqli_stmt_bind_param($stmt,'i',$id_offer);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $rowcount = mysqli_num_rows($result);
                $row2 = mysqli_fetch_all($result, MYSQLI_ASSOC);
                for ($i = 0; $i < $rowcount; $i++) {
                ?>
                <div class="barca oferte">
                    <div class="image">
                        <img src="<?php echo $row2[$i]['path'] ?>" loading="lazy" alt="error">
                    </div>
                    <div class="cont">
                        <p class="text">Oferta:<?php echo $row2[$i]['city'] ?></p>
                        <p><i class="fa-solid fa-clock"></i><?php echo $row2[$i]['durata'] ?></p>
                        <p><i class="fa-solid fa-calendar-days"></i>Disponibil de la :
                            <?php echo $row2[$i]['disponibility'] ?></p>
                    </div>
                    <div>
                        <div class="linear"></div>
                    </div>
                    <div class="details_price">
                        <p>De la:</p>
                        <h2><?php echo $row2[$i]['price'] ?>€</h2>
                        <div class="button  ">
                            <a href="detalii.php?city=<?php echo $row2[$i]['city'] ?>">
                                <button class="barcelona">Detalii</button>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <?php include_once "footer.php" ?>
    </section>
</body>
<script src="./js/oferte.js" type="module"></script>

</html>