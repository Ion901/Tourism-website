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
            <?php include_once "navbar.php";?>
            </nav>
        </div>

        <div class="offer_ctn">
            <div class="offer">
                <?php
                
                include "php/connection.php";            
                $sql = mysqli_query($conn, "SELECT * FROM `info` LEFT JOIN `gallery` ON info.id = gallery.id_info WHERE info.is_offer = 1 GROUP BY gallery.id_info");
                $rowcount = mysqli_num_rows($sql);
                $row2 = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                for($i = 0; $i < $rowcount; $i++){
                ?>
                <div class="barca oferte">
                    <div class="image">
                        <img src="<?php echo $row2[$i]['path']?>" alt="error">
                    </div>
                    <div class="cont">
                        <p class="text">Oferta:<?php echo $row2[$i]['city']?></p>
                        <p><i class="fa-solid fa-clock"></i><?php echo $row2[$i]['durata']?></p>
                        <p><i class="fa-solid fa-calendar-days"></i>Disponibil de la : <?php echo $row2[$i]['disponibility']?></p>
                    </div>
                    <div>
                        <div class="linear"></div>
                    </div>
                    <div class="details_price">
                        <p>De la:</p>
                        <h2><?php echo $row2[$i]['price']?>€</h2>
                        <div class="button  ">
                            <a href="detalii.php?city=<?php echo $row2[$i]['city']?>">
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
        <div class="footer">
            <div class="logo">
              <a href="../homepage/1.php"><img src="./images/KK-01 1.png" alt="image not finded"></a>
            </div>
            <div class="container">
            <div class="strada">
                <p style="font-family:'Jost';">str. Sarmizegetusa,<br>
                    Botanica Veche 48/12</p>
            </div>
            <div class="first_menu">
                <ul>
                    <li> <a href="oferte.php"> About</a></li>
                    <br>
                    <li><a href="excursii.php">Excursii</a></li>
                    <br>
                    <li> <a href="oferte.php"> Oferte</a></li>
                    <br>
                    <li> <a href="contact.php"> Contact </a></li>
                    <br>
                    <li> <a href="login.php"> Authentification </a></li>
                </ul>
            </div>
            <div class="social">
                <ul>
                    <li>Facebook</li>
                    <br>
                    <li>Twitter</li>
                    <br>
                    <li>Linkedin</li>
                    <br>
                    <li>Instagram</li>
                </ul>
            </div>
            <div class="up">
                <a href="#"><i id="upi" class="fa-solid fa-circle-arrow-up"></i></a>
            </div>
            <div class="number">
                <p>(373) 069-6785-321</p>
                <p id="gmail">ionerhan13@gmail.com</p>
            </div>
            <div class="cc">
                <p>© 2022 Discover World Media. All rights reserved.</p>
            </div>
        </div>
        </div>
    </section>
</body>
<script src="./js/oferte.js" type="module"></script>

</html>