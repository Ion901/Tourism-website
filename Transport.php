<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Tourism-website1/css/Transport.css">
    <title>Transport</title>
</head>
<body>
    <section>
        <div class="ctn">
            <nav class="navbar">
               <?php include_once "navbar.php";?>
                <div class="submenu">
                    <p>EXCURSII / TRANSPORT</p>
                </div>
            </nav>
        </div>

        <div class="maps">
            <div class="header">
                <p><i class="fa-solid fa-bus"></i>CELE MAI CĂUTATE RUTE / DESTINAȚII</p>
            </div>
            <div class="mas-in">
                <div class="belarus">
                    <img src="./images/belarus.png" alt="error">
                    <p>Belarus</p>
                </div>
                <div class="cehia">
                    <img src="./images/czech-republic.png" alt="error">
                    <p>Republica <br> Cehă</p>
                </div>
                <div class="franta">
                    <img src="./images/france.png" alt="error">
                    <p>Franța</p>
                </div>
                <div class="grecia">
                    <img src="./images/greece.png" alt="error">
                    <p>Grecia</p>
                </div>
                <div class="moldova">
                    <img src="./images/moldova.png" alt="error">
                    <p>Republica <br> Moldova</p>
                </div>
                <div class="slovenia">
                    <img src="./images/slovenia.png" alt="error">
                    <p>Slovenia</p>
                </div>
                <div class="romania">
                    <img src="./images/romania.png" alt="error">
                    <p>România</p>
                </div>
                <div class="olanda">
                    <img src="./images/netherlands.png" alt="error">
                    <p>Olanda</p>
                </div>
                <div class="spania">
                    <img src="./images/spain.png" alt="error">
                    <p>Spania</p>
                </div>
            </div>
        </div>

        <div id="map"></div>

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
                    <li> <a href="contact.php">Contact</a></li>
                    <br>
                    <li> <a href="login.php"> Authentification</a></li>
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
    
   
    <script src="./js/Transport.js" type="module"></script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"defer>
  </script>
</body>
</html>