<?php
include "./php/connection.php";
$london = mysqli_query($conn, "SELECT * from `info` WHERE id = 1");
$italia = mysqli_query($conn, "SELECT * from `info` WHERE id = 2");
$paris = mysqli_query($conn, "SELECT * from `info` WHERE id = 3");
$cambodgia = mysqli_query($conn, "SELECT * from `info` WHERE id = 4");
$egipt = mysqli_query($conn, "SELECT * from `info` WHERE id = 5");
$tokyo = mysqli_query($conn, "SELECT * from `info` WHERE id = 6");

    $row = mysqli_fetch_assoc($italia);
    $row2 = mysqli_fetch_assoc($london);
    $row3 = mysqli_fetch_assoc($paris);
    $row4 = mysqli_fetch_assoc($cambodgia);
    $row5 = mysqli_fetch_assoc($egipt);
    $row6 = mysqli_fetch_assoc($tokyo);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="./css/1.css">
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <div class="ctn">
            <nav class="navbar">
                <div class="sticked">
                    <a href="#"><svg class="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 792">
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
                                <form action="" class = "form">
                                    <input type="search" class = "inp" required>
                                    <i class="fa fa-magnifying-glass"></i>
                                    <a href="javascript:void(0)" id="clear-btn">Clear</a>
                                  </form>      
                        </li>
                        <li><a><i class="fa-solid fa-cart-shopping"></i></a></li>
                        <li><a href="login.php"><i class="fa-solid fa-circle-user"></i></li></a>
                        </ul>
                    </div>
                    <div class="top-button">
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa-solid fa-bars"></i>
                      </a>
                      </div>
                </div>
                <div class="options">
                    <img src="./images/pexels-pat-whelen-5615401.jpg" alt="foto lispeste" class="f1"> 
                    <img src="./images/pexels-dhyamis-kleber-2882378.jpg" alt="foto lispeste" class="f2">
                    <img src="./images/pexels-oleg-magni-1837610.jpg" alt="foto lispeste" class="f3"> 
                </div>
            </nav>
        </div>
        <div class="qoutes">
            <p><i class="fa-solid fa-location-dot"></i>Discover your favorite future locations</p>
        </div>
        <div id="slider">
            <ul id="slideWrap">
                <li><img id="i1" src="./images/cd993743a7f699d20cda8fbc7546d76a.jpg" alt="image not working">
                <div class="overlay">INTERNAȚIONAL</div>
                </li>
                <li><img src="./images/271393836_2183210335179967_9205213809527780883_n.jpg" alt="image not working">
                <div class="overlay">PELERINAJE</div>
                </li>
                <li><img src="./images/802589.jpg" alt="image not working">
                <div class="overlay">DEPLASARI</div>
                </li>
                <li><img src="./images/yang-wewe-OsFGJ3vXe9Q-unsplash.jpg" alt="photo is not working">
                <div class="overlay">MARE</div>
                </li>
                <li><img src="./images/mads-schmidt-rasmussen-xfngap_DToE-unsplash.jpg" alt="photo unsplash">
                    <div class="overlay">MUNTE</div>
                </li>
                <li><img src="./images/61646-washington-wallpaper-washington-wizards.jpg" alt="photo unsplash">
                <div class="overlay">S.U.A</div>
                </li>
            </ul>
            <a id="prev">&#8810;</a>
            <a id="next">&#8811;</a>
        </div>
        <div class="ctn2">
            <div class="left">
                <h3>Vacanta in<br>Europa,<br>London</h3>
                <p><i class="fa-solid fa-location-dot"></i>London, Tower Bridge</p>
                <p class="description">For a long time, London was a small city. All its people
                    lived inside the walls that were built by the Romans. This area is still called the City of London.
                    There were many villages around it and gradually they joined.</p>
               <a href="detalii.php?<?php echo "city=". $row2['city']?>"><button type="button" value="Detalii" class="finder">Detalii</button></a>
            </div>
            <div class="right1">
                <img src="./images/img_hotspot.png" alt="image not working">
            </div>
        </div>
        <div class="stil">
            <hr class="l1">
            <hr class="l2">
            <hr class="l3">
        </div>
        <div class="ctn3">
            <div class="left1">
                <img  src="./images/asda1 1.png" alt="image not working">
            </div>
            <div class="right2">
                <h3>Italia,<br>Orasul acvatic</h3>
                <p><i class="fa-solid fa-location-dot"></i>Italia, Venezia</p>
                <p class="description1">Venice is the main city of the Veneto region and
                    northeastern Italy. Venice is the capital of the province of the same name and has 264,534
                    inhabitants. The entire city was declared a World Heritage Site by UNESCO in 1979</p>
                <a href="detalii.php?<?php echo "city=". $row['city']?>"><button type="button" value="Detalii" class="finder1">Detalii</button></a>
            </div>
        </div>
        <div class="griding">
            <div class="paris">
                <a href="detalii.php?city=<?php echo $row3['city']?>">
                <img src="./images/pexels-nicolas-2267339.jpg" alt="image not respond">
                <div class="text">
                    <p>Paris, France</p>
                    <i style="position: relative;left: 70%;" class="fas fa-arrow-right" id="paris"></i>
                </div>
                </a>
            </div>
            <div class="cambodgia">
                <a href="detalii.php?city=<?php echo  $row4['city']?>">
                <img src="./images/pexels-te-lensfix-1371360.jpg" alt="image not respond">
                <div class="text1">
                    <p>Cardamon,<br>&nbsp&nbsp&nbsp&nbsp&nbspCambodgia</p>
                    <i style="position: relative;left: 70%;" class="fas fa-arrow-right" id="cardamon"></i>
                </div>
                </a>
            </div>
            <div class="egipt">
                <a href="detalii.php?city=<?php echo  $row5['city']?>">
                <img src="./images/pexels-rachel-claire-4577718.jpg" alt="image not respond" >
                <div class="text2">
                    <p>Giza, Egipt</p>
                    <i style="position: relative;left: 70%;" class="fas fa-arrow-right" id="egipt"></i>
                </div>
                </a>
            </div>
            <div class="tokyo">
                <a href="detalii.php?city=<?php echo $row6['city']?>">
                <img src="./images/pexels-pat-whelen-5615401.jpg" alt="image not respond">
                <div class="text3">
                    <i style="position: relative;left: 70%;" class="fas fa-arrow-right" id="tokyo"></i>
                    <p>Tokyo, Japan</p>
                </div>
                </a>
            </div>
        </div>
        <div class="footer">
            <div class="logo">
                <a href="#"><img src="./images/KK-01 1.png" alt="image not finded"></a>
            </div>
            <div class="container">
            <div class="strada">
                <p style="font-family:'Jost';">str. Sarmizegetusa,<br>
                    Botanica Veche 48/12</p>
            </div>
            <div class="first_menu">
                <ul>
                    <li> <a href="about.php"> About</a></li>
                    <br>
                    <li><a href="excursii.php">Excursii</a></li>
                    <br>
                    <li><a href="oferte.php">Oferte</a></li>
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
    <script src="./js/1.js"></script>
</body>


</html>
