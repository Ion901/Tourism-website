<?php
session_start();
include "php/connection.php";
if (isset($_GET['city'])) {
    $city = $_GET['city'];
}
$sql = mysqli_query($conn, "SELECT info.*,gallery.path FROM `info` LEFT JOIN `gallery` ON info.id = gallery.id_info WHERE info.city ='$city'") or die(mysqli_error($conn));;

if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
}
$id_info = $row['id'];
$_SESSION['id_info'] = $id_info;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/detalii.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Detalii</title>
</head>

<body>
    <div class="cont">
        <div class="water"></div>
    </div>
    <section>
        <div class="ctn">
            <nav class="navbar">
                <?php include_once "navbar.php"; ?>
            </nav>
        </div>
        <div class="continut">
            <div class="left">
                <div class="grid-template">
                    <div>
                        <p><i class="fa-solid fa-clock"></i><span class="disponibilitate"><?= $row['durata'] ?></span>
                        </p>
                    </div>
                    <div>
                        <p><i class="fa-solid fa-plane-departure"></i>Chisinau</p>
                    </div>
                    <div>
                        <p><i class="fa-solid fa-user"></i>Varsta min: 0+ </p>
                    </div>
                    <div>
                        <p><i class="fa-solid fa-calendar"></i>Disponibilitate: <?= $row['disponibility'] ?></p>
                    </div>
                    <div>
                        <p><i class="fa-solid fa-plane-arrival"></i> <span class="tara"><?= $row['country'] ?></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="right1">
                <div class="position">
                    <div class="right2">
                        <div class="header">
                            <div>
                                <p><i class="fa-solid fa-plane-departure"></i>&nbsp&nbsp<span class="titlu"><?php
                                                                                                            if ($row['country'] == "Moldova" || $row['country'] == "Romania") {
                                                                                                                echo $row['country'];
                                                                                                            } else {
                                                                                                                echo $row['city'];
                                                                                                            }
                                                                                                            ?></span>
                                </p>
                            </div>
                            <p class="pret"><?= $row['price'] ?>€ </p>
                        </div>

                    </div>
                    <div class="con">
                        <div class="parteners">
                            <p>Parteneri oficiali</p>
                        </div>
                    </div>
                    <div class="companies">
                        <div> <img loading="lazy" src="./images/image 1.png" alt="error"> </div>
                        <div> <img loading="lazy" src="./images/image 2.png" alt="error"> </div>
                        <div> <img loading="lazy" src="./images/image 3.png" alt="error"> </div>
                        <div> <img loading="lazy" src="./images/image 4.png" alt="error"> </div>
                        <div> <img loading="lazy" src="./images/image 5.png" alt="error"> </div>
                        <div> <img loading="lazy" src="./images/image 6.png" alt="error"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bar">
            <nav class="btn-6">
                <div><a href="#galerie">Galerie</a></div>
                <div><a href="#pret">Preț</a></div>
                <div><a href="#detalii">Detalii</a></div>
                <div><a href="#rezerva">Rezervă</a></div>
            </nav>
        </div>
        <div class="photos">
            <p><i class="fa-solid fa-photo-film"></i>Gallery</p>
        </div>
        <div class="images-grid-background" id="galerie">
            <?php
            mysqli_data_seek($sql, 0); //seteaza pointerul de la pozitia pe care o indici, eu am indicat aici pentru ca am returnat primul rand din scripptul de sus, iar acum pointerul este automat la al doilea 

            while ($photo = mysqli_fetch_assoc($sql)) {
            ?>
            <div><img src="<?= $photo['path']; ?>" loading="lazy" alt="error" class="img1"></div>
            <?php
            }
            ?>
        </div>
        <div class="continer">
            <div class="pret-ctn">
                <div class="price" id="pret">
                    <p>Preț - <?= $row['price'] ?>€
                    <p class="pret_moldavskii"></p>
                    </p>
                </div>

                <div class="details">
                    <?php
                    echo $row['detalii']
                    ?>
                </div>
            </div>
            <div class="details-ctn">
                <div class="details">
                    <p><i class="fa-solid fa-info" id="detalii"></i> Detalii</p>
                </div>
                <p class="det">
                    Agenții de turism își ajută clienții să își facă planuri de călătorie. Pe lângă rezervarea
                    rezervărilor, ei ajută clienții să-și aleagă destinația, transportul și cazarea și îi informează pe
                    călători cu privire la cerințele pentru pașapoarte și vize, ratele de schimb valutar și taxele de
                    import.
                </p>
            </div>
        </div>
        <div class="reservations">
            <a href="book.php"><button class="rezer" id="rezerva"> <input type="hidden" class="id"
                        id="<?= htmlspecialchars($id_info) ?>">Rezervă aici</button></a>
        </div>
        <?php include_once "footer.php" ?>
    </section>
    <div class="cart-container">
        <h1>Ultima voastră ofertă rezervată</h1>
        <p class="close">X</p>
        <div class="cart-container1">
            <div class="image">
                <img src="" alt="error" loading="lazy" class="img5">
            </div>
            <div class="tara_oras">
                <p class="city_country"></p>
                <p class="persoane"></p>
                <p class="interval"></p>
                <p class="pret1"></p>
            </div>
        </div>
    </div>

    <script type="module" src="./js/detalii.js"></script>
    <!-- <script src="./js/object.js"></script> -->
</body>

</html>