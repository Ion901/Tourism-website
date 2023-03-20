
<?php
include "./php/connection.php";
$sql = mysqli_query($conn, "SELECT `path` from gallery WHERE id=1" );
$sql1 = mysqli_query($conn, "SELECT `path` from gallery WHERE id=2" );
$sql2 = mysqli_query($conn, "SELECT `path` from gallery WHERE id=3" );
$sql3 = mysqli_query($conn, "SELECT `path` from gallery WHERE id=4" );
$sql4 = mysqli_query($conn, "SELECT `path` from gallery WHERE id=5" );
$sql5 = mysqli_query($conn, "SELECT `path` from gallery WHERE id=6" );
$sql6 = mysqli_query($conn, "SELECT `path` from gallery WHERE id=7" );
$sql7 = mysqli_query($conn, "SELECT `path` from gallery WHERE id=8" );
$sql8 = mysqli_query($conn, "SELECT `path` from gallery WHERE id=9" );
if(mysqli_num_rows($sql) > 0 && mysqli_num_rows($sql1) > 0 && mysqli_num_rows($sql2) > 0 && mysqli_num_rows($sql3) > 0 && mysqli_num_rows($sql4) > 0 && mysqli_num_rows($sql5) > 0 && mysqli_num_rows($sql6) > 0 && mysqli_num_rows($sql7) > 0 && mysqli_num_rows($sql8) > 0 ){
    $row1 = mysqli_fetch_assoc($sql);
    $row2 = mysqli_fetch_assoc($sql1);
    $row3= mysqli_fetch_assoc($sql2);
    $row4= mysqli_fetch_assoc($sql3);
    $row5= mysqli_fetch_assoc($sql4);
    $row6= mysqli_fetch_assoc($sql5);
    $row7= mysqli_fetch_assoc($sql6);
    $row8= mysqli_fetch_assoc($sql7);
    $row9= mysqli_fetch_assoc($sql8);
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
                <div class="sticked">
                    <a href="index.php"><svg class="Layer_1" data-name="Layer 1"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 792">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: rgb(255, 255, 255);

                                    }
                                </style>
                            </defs>
                            <path class="cls-1"
                                d="M391.64,459.64c-26.12-34.71-28-58.94-24.41-75,5.38-23.9,23.68-31.16,32-58,8.55-27.59,1.16-54.32-6-72,27.71,32.4,31.74,57.12,30,74-2.77,26.84-21.56,38.46-30,75A146,146,0,0,0,391.64,459.64Z" />
                            <path class="cls-1"
                                d="M430.29,460.65c-17.15-17.2-19.67-30.07-18.71-38.7,2.4-21.71,27.5-28,43.71-56.3,11.21-19.58,12.46-39.81,12-53,18.84,34.66,17,54.79,11,67-9.14,18.61-29.47,22.5-41.41,48.25A74.5,74.5,0,0,0,430.29,460.65Z" />
                            <path class="cls-1"
                                d="M236.93,302.83A78.75,78.75,0,0,1,267.71,251q3.5,9.27,7,18.55-4.35,4-8.79,8Q251.35,290.65,236.93,302.83Z" />
                            <path class="cls-1"
                                d="M379.72,243.77a82.56,82.56,0,0,0-76.8,15.08l-7.92-19a96.64,96.64,0,0,1,23.29-6.53C346.28,229.12,369,238.44,379.72,243.77Z" />
                            <polygon class="cls-1"
                                points="311.17 299.74 275.31 269.74 303.1 259.5 309 269.89 329.14 305.13 311.17 299.74" />
                            <path class="cls-1"
                                d="M273.6,204.6,267.72,251l27.34-11.39q-1.35-5.84-2.71-11.66l-9.21-39.53Z" />
                            <path class="cls-1"
                                d="M303.1,259.5c-4.57,8.67-12.47,13.94-20.15,13.25a16.58,16.58,0,0,1-8.26-3.21q-3.49-9.27-7-18.55c1.25-1.86,7-10,17.37-11.67a23.94,23.94,0,0,1,9.93.5,13.6,13.6,0,0,1,9.27,16.85,13.76,13.76,0,0,1-1.18,2.83Z" />
                        </svg></a>
                    <div class="right" id="myTopnav">
                        <ul>
                            <li><a href="excursii.php">EXCURSII &dtrif;</a>
                                <ul class="dropdown">
                                    <li><a href="tips.php">TIPS</li></a>
                                    <li><a href="Transport.php">TRANSPORT</li></a>
                                    <li><a href="galerie.php">GALLERY</li></a>
                                </ul>
                            <li><a href="oferte.php">OFERTE</li></a>
                            <li><a href="about.php">ABOUT</li></a>
                            <li><a href="contact.php">CONTACT US</li></a>
                            </li>
                            <li>
                                <form action="" class="form">
                                    <input type="search" class="inp" required>
                                    <i class="fa fa-magnifying-glass"></i>
                                    <a href="javascript:void(0)" id="clear-btn">Clear</a>
                                </form>
                            </li>
                            <li><a><i class="fa-solid fa-cart-shopping"></i></a></li>
                            <li><a href="login.php"><i class="fa-solid fa-circle-user"></i></li></a>

                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
                <div class="submenu">
                    <p>EXCURSII / GALERIE</p>
                </div>
            </nav>
        </div>
        <div class="container1">
            <div class="l1">
                <img id="myImg1" src="<?php echo $row1['path']?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                  </div>
                  
            </div>
            <div class="l8">
                <img id="myImg2" src="<?php echo $row2['path']?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                  </div>
            </div>
            <div class="l10">
              <div class="l11">
                <img id="myImg3" src="<?php echo $row3['path']?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">                 
                  </div>
              </div>
              <div class="l12">
                <img id="myImg4" src="<?php echo $row4['path']?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                  </div>
              </div>
            </div>
            <div class="l13">
                <img id="myImg5" src="<?php echo $row5['path']?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                  </div>
            </div>
            <div class="l9">
              <div class="l15">
                <img id="myImg6" src="<?php echo $row6['path']?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                  </div>
              </div>
              <div class="l16">
                <img id="myImg7" src="<?php echo $row7['path']?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                  </div>
              </div>
            </div>
            <div class="l2">
              <div class="l3">
                <img id="myImg8" src="<?php echo $row8['path']?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                  </div>
              </div>
              <div class="l4">
                <img id="myImg9" src="<?php echo $row9['path']?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
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
    <script src="./js/galerie.js"></script>
</body>
</html>