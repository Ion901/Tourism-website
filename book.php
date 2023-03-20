
<?php
include "./php/connection.php";
session_start();
if(isset($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];


$sql = mysqli_query($conn, "SELECT name, email FROM `user` where id = $user_id");
if(mysqli_num_rows($sql) > 0){
    $data_fetch = mysqli_fetch_assoc($sql);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/book.css">
</head>
<body>
    <section>
        <div class="header-logo">
            <a href="index.php"><svg class="Layer_1" data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 792">
                <defs>
                    <style>
                        .cls-1 {
                            fill: rgb(0, 0, 0);

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
        </div>
        <form name="form" action="./php/add-info.php" method="POST">
            <div class="elem-group">
              <label for="name">Numele:</label>
              <input type="text" id="name" name="visitor_name" placeholder="Erhan Ion" pattern=[A-Z\sa-z]{3,20} value="<?php
              if(isset($user_id)){
              echo $data_fetch['name'];
              }else{
              echo "";
              }?>" required>
            </div>
            <div class="elem-group">
              <label for="email">Adresa de email</label>
              <input type="email" id="email" name="visitor_email" placeholder="ErhanIon@mail.com" value="<?php if(isset($user_id)){
              echo $data_fetch['email'];
              }else{
              echo "";
              }?>" required>
            </div>
            <div class="elem-group">
              <label for="phone">Numarul de telefon</label>
              <input type="tel" id="phone" name="visitor_phone" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
            </div>
            
            <div class="elem-group inlined">
              <label for="adult">Adulți</label>
              <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
            </div>
            <div class="elem-group inlined">
              <label for="child">Copii</label>
              <input type="number" id="child" name="total_children" placeholder="2" min="0" required>
            </div>
            <div class="elem-group inlined">
              <label for="checkin-date">Data de check-in</label>
              <input type="date" id="checkin-date" name="checkin" required>
            </div>
            <div class="elem-group inlined">
              <label for="checkout-date">Data de check-out</label>
              <input type="date" id="checkout-date" name="checkout" required>
            </div>
            <div class="elem-group">
              <label for="room-selection">Selectati preferintele</label>
              <select id="room-selection" name="room_preference" required>
                  <option disabled>Alegeti din lista de mai jos</option>
                  <option value="Excursii">Excursii</option>
                  <option value="Calatorii">Calatorii</option>
                  <option value="Tururi turistice">Tururi turistice</option>
              </select>
            </div>
            
            <div class="elem-group">
              <label for="message">Nota/ Sugestii/ Propuneri?</label>
              <textarea id="message" name="visitor_message" placeholder="Ce consideri ca nu este clar?!" ></textarea>
            </div>
              <button type="submit" class="offer" name="submit" >Rezervati oferta</button>
          </form>
        </section>
        
        <?php
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
        }
       ?>

          
    
    <script src="./js/book.js"></script>
</body>
</html>