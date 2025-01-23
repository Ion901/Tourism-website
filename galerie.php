
<?php
include "./php/connection.php";
$sql = mysqli_query($conn, "SELECT * from gallery WHERE id BETWEEN 1 AND 10" );
if(mysqli_num_rows($sql) > 0 ){
    $row = mysqli_fetch_all($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/galerie.css">
    <title>Gallery</title>
</head>
<body>
    <section>
        <div class="ctn">
            <nav class="navbar">
                <?php include_once "navbar.php" ?>
                <div class="submenu">
                    <p>EXCURSII / GALERIE</p>
                </div>
            </nav>
        </div>
        <div class="container1">
            <div class="l1">
                <img loading="lazy" class="myImg" id="myImg1" src="<?= $row[0][1]?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img loading="lazy" class="modal-content" id="img01">
                  </div>
                  
            </div>
            <div class="l8">
                <img loading="lazy" class="myImg" id="myImg2" src="<?= $row[1][1]?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img loading="lazy" class="modal-content" id="img01">
                  </div>
            </div>
            <div class="l10">
              <div class="l11">
                <img loading="lazy" class="myImg" id="myImg3" src="<?= $row[2][1]?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img loading="lazy" class="modal-content" id="img01">                 
                  </div>
              </div>
              <div class="l12">
                <img loading="lazy" class="myImg" id="myImg4" src="<?= $row[3][1]?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img loading="lazy" class="modal-content" id="img01">
                  </div>
              </div>
            </div>
            <div class="l13">
                <img loading="lazy" class="myImg" id="myImg5" src="<?= $row[4][1]?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img loading="lazy" class="modal-content" id="img01">
                  </div>
            </div>
            <div class="l9">
              <div class="l15">
                <img loading="lazy" class="myImg" id="myImg6" src="<?= $row[5][1]?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img loading="lazy" class="modal-content" id="img01">
                  </div>
              </div>
              <div class="l16">
                <img loading="lazy" class="myImg" id="myImg7" src="<?= $row[6][1]?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img loading="lazy" class="modal-content" id="img01">
                  </div>
              </div>
            </div>
            <div class="l2">
              <div class="l3">
                <img loading="lazy" class="myImg" id="myImg8" src="<?= $row[7][1]?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img loading="lazy" class="modal-content" id="img01">
                  </div>
              </div>
              <div class="l4">
                <img loading="lazy" class="myImg" id="myImg9" src="<?= $row[8][1]?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img loading="lazy" class="modal-content" id="img01">
                  </div>
              </div>
            </div>
          </div>
        
        <div class="footer">
            <div class="logo">
              <a href="index.php"><img src="./images/KK-01 1.png" alt="image not finded"></a>
            </div>
            <div class="container">
            <div class="strada">
                <p style="font-family:'Jost';">str. Sarmizegetusa,<br>
                    Botanica Veche 48/12</p>
            </div>
            <div class="first_menu">
                <ul>
                    <li> <a href="about.php">About</a></li>
                    <br>
                    <li><a href="excursii.php">Excursii</a></li>
                    <br>
                    <li><a href ="oferte.php">Oferte</a></li>
                    <br>
                    <li><a href="contact.php">Contact</a></li>
                    <br>
                    <li><a href="login.php">Authentification</a></li>
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
    <script src="./js/galerie.js" type="module"></script>
</body>
</html>