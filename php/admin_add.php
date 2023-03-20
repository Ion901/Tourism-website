<!DOCTYPE html>  
<html>  
<head>  
<style>  
.error {color: #FF0001;}  
</style>  
</head> 
<link rel="stylesheet" href="../css/admyn.css"> 
<body>  
    <div class="ctn">
            <nav class="navbar">
                <div class="sticked">
                    <a href="../../index.php"><svg class="Layer_1" data-name="Layer 1"
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
                            <li><a href="../excursii.php">EXCURSII &dtrif;</a>
                                <ul class="dropdown">
                                    <li><a href="../tips.php">TIPS</li></a>
                                    <li><a href="../Transport.php">TRANSPORT</li></a>
                                    <li><a href="../galerie.php">GALLERY</li></a>
                                </ul>
                            <li><a href="../oferte.php">OFERTE</li></a>
                            <li><a href="../about.php">ABOUT</li></a>
                            <li><a href="../contact.php">CONTACT US</li></a>
                            </li>
                            <li>
                                <form action="" class="form">
                                    <input type="search" class="inp" required>
                                    <i class="fa fa-magnifying-glass"></i>
                                    <a href="javascript:void(0)" id="clear-btn">Clear</a>
                                </form>
                            </li>
                            <li><a><i class="fa-solid fa-cart-shopping"></i></a></li>
                            <li><a href="../login.php"><i class="fa-solid fa-circle-user"></i></li></a>

                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>

            </nav>
        </div>  
  
<?php  
 include "connection.php";
 mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=0"); 
$countryErr = $cityErr = $priceErr = $durataErr = $detaliiErr  = "";  
$country = $city = $price = $durata = $detalii = "";  
  
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
    if (empty($_POST["country"])) {  
         $nameErr = "Country is required";  
    } else {  
        $country = input_data($_POST["country"]);   
    }  
      
     
    if (empty($_POST["city"])) {  
            $cityErr = "City is required";  
    } else {  
            $city = input_data($_POST["city"]);  
             
     }  
    
    
    if (empty($_POST["price"])) {  
            $priceErr = "Price is required";  
    } else {  
            $price = input_data($_POST["price"]);  
             
    }  
      
         
    if (empty($_POST["durata"])) {  
        $durata = "";  
    } else {  
            $durata = input_data($_POST["durata"]);  
                 
    }  
      
 
    if (empty ($_POST["detalii"])) {  
            $detaliiErr = "Detaliile sunt obligatoii";  
    } else {  
            $detalii = input_data($_POST["detalii"]);  
    }  
    
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  
  <section>
<h2>Add new offer</h2>
<span class = "error">* required field </span>  
<br><br>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" >    
    <label>
        Country:
    </label>   
    <input type="text" name="country"><br>
    <span class="error">* <?php echo $countryErr; ?> </span>  
    <br><br>  
    <label>
        City:   
   </label>
    <input type="text" name="city"> <br>
    <span class="error">* <?php echo $cityErr; ?> </span>  
    <br><br>  
    <label>
        Pret:   
    </label>
    <input type="number" min=0 name="price"><br>
    <span class="error">* <?php echo $priceErr; ?> </span>  
    <br><br>  
    <label>
        Durata:
    </label>
    <input type="text" name="durata">  
    <span class="error"><?php echo $durataErr; ?> </span>  
    <br><br>  
    <div class="user-name">
        <p>Select photo</p>
        <input type="file" name="image" accept="image/jpg, image/jpeg, image/png">
      </div>
    Detalii:  
    <textarea name="detalii" cols="30" rows="10"></textarea> 
    <span class="error">* <?php echo $detaliiErr; ?> </span>  
    <br><br>  
    <input type="submit" name="submit" value="Add"> 
    <br><br>                             
</form> 
</section>   
  
<?php  
    if(isset($_POST['submit'])) {  
    if($countryErr== "" && $cityErr == "" && $priceErr == "" && $durataErr == "" && $detaliiErr == "" ) {  
        echo "<h3 color = #FF0001> <b>Inregistered succesfull</b> </h3>";  
         
        $insert = mysqli_query($conn,"INSERT INTO `info` (country,city,price,durata,detalii) Values ('$country','$city','$price','$durata','$detalii')");
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = "../images/".$image ;
        if($image_size > 200000){
            echo "<p>image is too large</p>";
        }
        $insert_image = mysqli_query($conn,"INSERT INTO `oferte` (path) VALUES ('$image_folder')");
        if($insert_image){
            move_uploaded_file($image_tmp_name,$image_folder);
            
        }
    

    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
    mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=1");
    }
   
?>  
  
</body>  
<script src="../js/1.js"></script>
</html>  