<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/contact.css">
</head>
<body>
    <section>
        <div class="ctn">
            <nav class="navbar">
            <?php include_once "navbar.php";?>
            </nav>
        </div>
        <div class="icons">
            <div class="cont">
            <div class="email">
                <div class="sus">
                        <i class="fa-solid fa-envelope"></i>                               
                </div>           
            </div>
            <div class="name">
                <p>E-mail</p>
                <p>ionerhan13@gmail.com</p>
            </div>   
        </div>
        <div class="cont">
            <div class="email">
                <div class="sus">
                    <i class="fa-solid fa-mobile"></i>                             
                </div>           
            </div>
            <div class="name">
                <p>Phone</p>
                <p>+3736943112</p>
            </div>   
        </div>
        <div class="cont">
            <div class="email">
                <div class="sus">
                    <i class="fa-solid fa-location-dot"></i>                            
                </div>           
            </div>
            <div class="name">
                <p>Adress</p>
                <p>str.Sarmizegetusa,
                    Botanica Veche48/13</p>
            </div>   
        </div>
        </div>
        <div class="formular">
            <h3>Trimite un mesaj</h3>
            <div class="form-innit">
                <form action="">
                    <div class="header">
                    <div class="nume">
                    <p>Nume*</p>
                    <input type="text" placeholder="Numele dvs.">
                    </div>
                    <div class="e-mail">
                        <p>E-mail*</p>
                        <input type="email" name="" id="" placeholder="Introduceti e-mailul">
                    </div>
                </div>
                    <div class="message">
                        <div class="message-init">
                        <p>Message*</p>
                        <textarea name="" id="" >
                        </textarea>
                    </div>
                    </div>
                    <div class="final">
                        <button type="submit">
                            SEND
                        </button>
                    </div>
                </form>
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
                    <li><a href="about.php">About</a></li>
                    <br>
                    <li><a href="excursii.php">Excursii</a></li>
                    <br>
                    <li><a href="oferte.php">Oferte</a></li>
                    <br>
                    <li><a href="contact.php"></a>Contact</a></li>
                    <br>
                    <li> <a href="login.php">Authentification</a></li>
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
    <script src="./js/implementNavbar.js" type="module"></script>
</body>
</html>