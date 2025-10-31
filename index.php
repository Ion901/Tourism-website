<?php
include "php/connection.php";
$ids = [1,2,3,4,5,6];
$placeholders = implode(',',array_fill(0,count($ids),'?'));
$types = str_repeat('i',count($ids));

$stmt = mysqli_prepare($conn, "SELECT * FROM `info` WHERE id IN ($placeholders)");
mysqli_stmt_bind_param($stmt, $types, ...$ids);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$dataArr = [];

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
}

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
                <?php include_once "navbar.php"; ?>

        </div>
        <div class="options">
            <img src="./images/pexels-pat-whelen-5615401.webp" loading="lazy" alt="foto lispeste" class="f1">
            <img src="./images/pexels-dhyamis-kleber-2882378.webp" loading="lazy" alt="foto lispeste" class="f2">
            <img src="./images/pexels-oleg-magni-1837610.webp" loading="lazy" alt="foto lispeste" class="f3">
        </div>
        </nav>
        </div>
        <div class="qoutes">
            <p><i class="fa-solid fa-location-dot"></i>Discover your favorite future locations</p>
        </div>
        <div id="slider">
            <ul id="slideWrap">
                <li><img id="i1" src="./images/cd993743a7f699d20cda8fbc7546d76a.webp" loading="lazy"
                        alt="image not working">
                    <div class="overlay">INTERNAȚIONAL</div>
                </li>
                <li><img src="./images/271393836_2183210335179967_9205213809527780883_n.webp" loading="lazy"
                        alt="image not working">
                    <div class="overlay">PELERINAJE</div>
                </li>
                <li><img src="./images/802589.webp" loading="lazy" alt="image not working">
                    <div class="overlay">DEPLASARI</div>
                </li>
                <li><img src="./images/yang-wewe-OsFGJ3vXe9Q-unsplash.webp" loading="lazy" alt="photo is not working">
                    <div class="overlay">MARE</div>
                </li>
                <li><img src="./images/mads-schmidt-rasmussen-xfngap_DToE-unsplash.webp" loading="lazy"
                        alt="photo unsplash">
                    <div class="overlay">MUNTE</div>
                </li>
                <li><img src="./images/61646-washington-wallpaper-washington-wizards.webp" loading="lazy"
                        alt="photo unsplash">
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
                <a href="detalii.php?<?php echo "city=" . $row[0]['city'] ?>"><button type="button" value="Detalii"
                        class="finder">Detalii</button></a>
            </div>
            <div class="right1">
                <img src="./images/img_hotspot.png" loading="lazy" alt="image not working">
            </div>
        </div>
        <div class="stil">
            <hr class="l1">
            <hr class="l2">
            <hr class="l3">
        </div>
        <div class="ctn3">
            <div class="left1">
                <img src="./images/asda1 1.png" loading="lazy" alt="image not working">
            </div>
            <div class="right2">
                <h3>Italia,<br>Orasul acvatic</h3>
                <p><i class="fa-solid fa-location-dot"></i>Italia, Venezia</p>
                <p class="description1">Venice is the main city of the Veneto region and
                    northeastern Italy. Venice is the capital of the province of the same name and has 264,534
                    inhabitants. The entire city was declared a World Heritage Site by UNESCO in 1979</p>
                <a href="detalii.php?<?php echo "city=" . $row[1]['city'] ?>"><button type="button" value="Detalii"
                        class="finder1">Detalii</button></a>
            </div>
        </div>
        <div class="griding">
            <div class="paris">
                <a href="detalii.php?city=<?php echo $row[2]['city'] ?>">
                    <picture>
                        <source media="(max-width: 992px)" srcset="./images/pexels-nicolas-2267339-992w.webp">
                        <img src="./images/pexels-nicolas-2267339.webp" loading="lazy" alt="image not respond">
                    </picture>
                    <div class="text">
                        <p>Paris, France</p>
                        <i style="position: relative;left: 70%;" class="fas fa-arrow-right" id="paris"></i>
                    </div>
                </a>
            </div>
            <div class="cambodgia">
                <a href="detalii.php?city=<?php echo  $row[3]['city'] ?>">
                    <picture>
                        <source media="(max-width: 992px)" srcset="./images/pexels-te-lensfix-1371360-992w.webp">
                        <img src="./images/pexels-te-lensfix-1371360.webp" loading="lazy" alt="image not respond">
                    </picture>
                    <div class="text1">
                        <p>Cardamon,<br>&nbsp&nbsp&nbsp&nbsp&nbspCambodgia</p>
                        <i style="position: relative;left: 70%;" class="fas fa-arrow-right" id="cardamon"></i>
                    </div>
                </a>
            </div>
            <div class="egipt">
                <a href="detalii.php?city=<?php echo  $row[4]['city'] ?>">
                    <picture>
                        <source media="(max-width: 992px)" srcset="./images/pexels-rachel-claire-4577718-600.webp">
                        <img src="./images/pexels-rachel-claire-4577718.webp" loading="lazy" alt="image not respond">
                    </picture>
                    <div class="text2">
                        <p>Giza, Egipt</p>
                        <i style="position: relative;left: 70%;" class="fas fa-arrow-right" id="egipt"></i>
                    </div>
                </a>
            </div>
            <div class="tokyo">
                <a href="detalii.php?city=<?php echo $row[5]['city'] ?>">
                    <picture>
                        <source media="(max-width: 992px)" srcset="./images/pexels-pat-whelen-5615401-992w.webp">
                        <img src="./images/pexels-pat-whelen-5615401.webp" loading="lazy" alt="image not respond">
                    </picture>
                    <div class="text3">
                        <i style="position: relative;left: 70%;" class="fas fa-arrow-right" id="tokyo"></i>
                        <p>Tokyo, Japan</p>
                    </div>
                </a>
            </div>
        </div>
        <?php include_once "footer.php" ?>
    </section>
    <script src="./js/1.js" type="module"></script>
</body>

</html>