<?php
include "./php/connection.php";
$id_start = 1;
$id_final = 10;

$stmt = mysqli_prepare($conn, "SELECT * from gallery WHERE id BETWEEN ? AND ?");
mysqli_stmt_bind_param($stmt, 'ii', $id_start, $id_final);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result);
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
            <div class="l1 blur-div"
                style="background-image:url(images/image-small/alevision-co-7ojyp-IXW7w-unsplash-small.jpg); background-repeat:no-repeat; background-size:cover">
                <img loading="lazy" class="myImg" id="myImg1" src="<?= $row[0][1] ?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img loading="lazy" class="modal-content" id="img01">
                </div>

            </div>
            <div class="l8 blur-div"
                style="background-image:url(images/image-small/guilherme-stecanella-YGSgLIQd90s-unsplash-small.jpg); background-repeat:no-repeat; background-size:cover">
                <img loading="lazy" class="myImg" id="myImg2" src="<?= $row[1][1] ?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img loading="lazy" class="modal-content" id="img01">
                </div>
            </div>
            <div class="l10 ">
                <div class="l11 blur-div"
                    style="background-image:url(images/image-small/magda-v-A1zjlXYuXb8-unsplash-small.jpg); background-repeat:no-repeat; background-size:cover">
                    <img loading="lazy" class="myImg" id="myImg3" src="<?= $row[2][1] ?>" alt="error">
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img loading="lazy" class="modal-content" id="img01">
                    </div>
                </div>
                <div class="l12 blur-div" style="background-image:url(images/image-small/pedro-carballo-oFnzIf47j8I-unsplash-small.jpg);
                    background-repeat:no-repeat; background-size:cover">
                    <img loading="lazy" class="myImg" id="myImg4" src="<?= $row[3][1] ?>" alt="error">
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img loading="lazy" class="modal-content" id="img01">
                    </div>
                </div>
            </div>
            <div class="l13 blur-div" style="background-image:url(images/image-small/venezia1-small.jpg);
                    background-repeat:no-repeat; background-size:cover">
                <img loading="lazy" class="myImg" id="myImg5" src="<?= $row[4][1] ?>" alt="error">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img loading="lazy" class="modal-content" id="img01">
                </div>
            </div>
            <div class="l9">
                <div class="l15 blur-div" style="background-image:url(images/image-small/venezia2-small.jpg);
                    background-repeat:no-repeat; background-size:cover">
                    <img loading="lazy" class="myImg" id="myImg6" src="<?= $row[5][1] ?>" alt="error">
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img loading="lazy" class="modal-content" id="img01">
                    </div>
                </div>
                <div class="l16 blur-div" style="background-image:url(images/image-small/venezia3-small.jpg);
                    background-repeat:no-repeat; background-size:cover">
                    <img loading="lazy" class="myImg" id="myImg7" src="<?= $row[6][1] ?>" alt="error">
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img loading="lazy" class="modal-content" id="img01">
                    </div>
                </div>
            </div>
            <div class="l2">
                <div class="l3 blur-div" style="background-image:url(images/image-small/venezia4-small.jpg);
                    background-repeat:no-repeat; background-size:cover">
                    <img loading="lazy" class="myImg" id="myImg8" src="<?= $row[7][1] ?>" alt="error">
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img loading="lazy" class="modal-content" id="img01">
                    </div>
                </div>
                <div class="l4 blur-div" style="background-image:url('images/image-small/paris (1)-small.jpg');
                    background-repeat:no-repeat; background-size:cover">
                    <img loading="lazy" class="myImg" id="myImg9" src="<?= $row[8][1] ?>" alt="error">
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img loading="lazy" class="modal-content" id="img01">
                    </div>
                </div>
            </div>
        </div>

        <?php include_once "footer.php" ?>
    </section>
    <script src="./js/galerie.js" type="module"></script>
</body>

</html>