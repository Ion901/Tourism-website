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
                <?php include_once "navbar.php" ?>
            </nav>
        </div>

        <div class="forms">
            <form action="">
                <div class="formular2 form search"><input type="search" placeholder="Cuvinte Cheie"><i
                        class="fa fa-magnifying-glass"></i></div>
                <div class="formular2 form categorie"><select name="categories" id="categories">
                        <option value> Categorie</option>
                        <option value="munte">Munte</option>
                        <option value="mare">Mare</option>
                        <option value="schi">Schi</option>
                        <option value="skydiving">Skydiving</option>
                    </select></div>
                <div class="formular2 form destinations">
                    <select name="destinatie" id="categories">
                        <option value>Destinația</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Romania">Romania</option>
                        <option value="S.U.A">S.U.A</option>
                        <option value="Germania">Germania</option>
                    </select>
                </div>
                <div class="formular2 form month">
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
                <div class="formular2 form btn"><button>Caută</button></i></div>
            </form>
        </div>

        <div class="card_ctn">
            <div class="cnt">
                <?php
                include "php/connection.php";
                $sql = mysqli_query($conn, "SELECT * FROM `info` LEFT JOIN `gallery` ON info.id = gallery.id_info WHERE info.is_excursion = 1 GROUP BY gallery.id_info");
                $rowcount = mysqli_num_rows($sql);
                $row2 = mysqli_fetch_all($sql, MYSQLI_ASSOC);
                for ($i = 0; $i < $rowcount; $i++) {
                ?>
                    <div class="prima oferte">
                        <a href="detalii.php?city=<?php echo $row2[$i]['city'] ?>">
                            <img src="<?php echo $row2[$i]['path'] ?>" loading="lazy" alt="image not responding">
                            <div class="content">
                                <h5><?php echo $row2[$i]['disponibility'] ?></h5>
                                <p class="text"><?php echo $row2[$i]['city'] ?></p>
                                <br>
                                <div class="inline">
                                    <p><i class="fa-solid fa-clock"></i><?php echo $row2[$i]['durata'] ?></p>
                                    <p class="pret">Price:<i><?php echo $row2[$i]['price'] ?>$</i></p>
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
            <img src="./images/Rectangle 16.jpg" loading="lazy" alt="image not responding">
            <div class="content-01">
                <p>Ai anumite intrebari?! <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFii liber sa
                    intrebi...</p>
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
                        <img src="./images/Rectangle 19.png" loading="lazy" alt="error">
                        <p>CETATENIE, ACTE LEGALIZATE, TRANSPORT.
                    </a></p>
                </div>
                <div class="covid">
                    <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019">
                        <img src="./images/Rectangle 20.png" loading="lazy" alt="error">
                        <p>ULTIMELE INFORMATII COVID-19</p>
                    </a>
                </div>
                <div class="tricks">
                    <a href="https://trade.ec.europa.eu/access-to-markets/ro/content/documente-si-proceduri-de-vamuire">
                        <img src="./images/Rectangle 21.png" loading="lazy" alt="error">
                        <p>DOCUMENTE BINE ELABORATE ȘI CUM AR TREBUI SA TE PREZINȚI?!
                    </a></p>
                </div>

            </div>
        </div>
        <?php include_once "footer.php" ?>
    </section>
</body>
<script src="./js/excursii.js" type="module"></script>


</html>