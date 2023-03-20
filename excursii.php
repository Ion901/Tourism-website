<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excursii</title>
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/excursii.css">
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
                                <form action="" class="formular">
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
            </nav>
        </div>

        <div class="forms">
            <form action="">
                <div class="form search"><input type="search" placeholder="Cuvinte Cheie"><i
                        class="fa fa-magnifying-glass"></i></div>
                <div class="form categorie"><select name="categories" id="categories">
                        <option value> Categorie</option>
                        <option value="munte">Munte</option>
                        <option value="mare">Mare</option>
                        <option value="schi">Schi</option>
                        <option value="skydiving">Skydiving</option>
                    </select></div>
                <div class="form destinations">
                    <select name="destinatie" id="categories">
                        <option value>Destinația</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Romania">Romania</option>
                        <option value="S.U.A">S.U.A</option>
                        <option value="Germania">Germania</option>
                    </select>
                </div>
                <div class="form month">
                    <select name="luna" id="categories">
                        <option value>Luna</option>
                        <option value="Ianuarie">Ianuarie</option>
                        <option value="Februarie">Februarie</option>
                        <option value="Martie">Martie</option>
                        <option value="Aprilie">Aprilie</option>
                        <option value="Mai">Mai</option>
                        <option value="Iunie">Iunie</option>
                        <option value="Iulie">Iulie</option>
                        <option value="August">August</option>
                        <option value="Septembrie">Septembrie</option>
                        <option value="Octombrie">Octombrie</option>
                        <option value="Noiembrie">Noiembrie</option>
                        <option value="Decembrie">Decembrie</option>
                    </select>
                </div>
                <div class="form btn"><button>Caută</button></i></div>
            </form>
        </div>
       
        <div class="card_ctn">
            <div class="cnt">
            <?php
        include "./php/connection.php";
        $sql = mysqli_query($conn, "SELECT * FROM `info` WHERE id between 7 and 10 ");
        $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
        $rowcount = mysqli_num_rows($sql);
        $photo = mysqli_query($conn, "SELECT * FROM `excursii` where id_info between 1 and 4 ");
        $row2 = mysqli_fetch_all($photo,MYSQLI_ASSOC);
        for($i = 0; $i < $rowcount; $i++){
        ?>
                <div class="prima oferte">
                    <a href="detalii.php?city=<?php echo $row[$i]['city']?>">
                    <img src="<?php echo $row2[$i]['path'] ?>" alt="image not responding">
                    <div class="content">
                    <h5><?php echo $row2[$i]['start_date']?></h5>
                    <p class="text"><?php echo $row[$i]['city']?></p>
                    <br>
                    <div class="inline">
                   <p><i class="fa-solid fa-clock"></i><?php echo $row[$i]['durata']?></p>
                    <p class="pret">Price:<i><?php echo $row[$i]['price']?>$</i></p>
                </div>
            </div>
            </a>
                </div>
                <?php
        }
            ?>
            </div>
        </div>
         
        <div class="ask_tab">
            <img src="./images/Rectangle 16.jpg" alt="image not responding">
            <div class="content-01">
                <p>Ai anumite intrebari?! <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFii liber sa intrebi...</p>
                <a href="contact.php"><button> Nu ezita!!!</button></a>
            </div>
        </div>
        <div class="stil">
            <hr class="l1">
            <hr class="l2">
            <hr class="l3">
        </div>
        <div class="news">
            <h2 style="margin-bottom: 30px;">NOUTĂȚI</h2>
                    <div class="divider">
                        <div class="documents">
                            <a href="https://asp.gov.md/">
                            <img src="./images/Rectangle 19.png" alt="error">
                            <p>CETATENIE, ACTE LEGALIZATE, TRANSPORT.</a></p>
                        </div>
                        <div class="covid">
                            <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019">
                            <img src="./images/Rectangle 20.png" alt="error">
                            <p>ULTIMELE INFORMATII COVID-19</p></a>
                        </div>
                        <div class="tricks">
                            <a href="https://trade.ec.europa.eu/access-to-markets/ro/content/documente-si-proceduri-de-vamuire">
                            <img src="./images/Rectangle 21.png" alt="error">
                            <p>DOCUMENTE BINE ELABORATE ȘI CUM AR TREBUI SA TE PREZINȚI?!</a></p>
                        </div>

                    </div>
        </div>
        <div class="footer">
            <div class="logo">
                <img src="./images/KK-01 1.png" alt="image not finded">
            </div>
            <div class="container">
            <div class="strada">
                <p style="font-family:'Jost';">str. Sarmizegetusa,<br>
                    Botanica Veche 48/12</p>
            </div>
            <div class="first_menu">
                <ul>
                    <li><a href="about.php">About</a></li>
                    <br>
                    <li><a href="oferte.php">Excursii</a></li>
                    <br>
                    <li><a href="oferte.php">Oferte</a></li>
                    <br>
                    <li><a href="oferte.php">Contact</a></li>
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
    <script src="./js/excursii.js"></script>
</body>


</html>