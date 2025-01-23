<?php
include "./php/connection.php";
session_start();

if (!isset($_SESSION['user_id'])) {
  header("location:login.php");
  exit();
}

$user_id = $_SESSION['user_id'];
$id_info = $_SESSION['id_info'];

$stmt = $conn->prepare("SELECT * FROM `orders` WHERE id_user = ? AND id_info = ?");
$stmt->bind_param("ii", $user_id, $id_info);
$stmt->execute();
$result = $stmt->get_result();
$data_fetch = $result->fetch_assoc() ?: [];

$stmt->close();
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
  <div class="container">
  <p class="back-message"></p>
  </div>
  <section>
  <div class="header-logo">
    <a href="index.php">
    <?php include_once "images/logo.svg" ?>
    </a>
  </div>
  <form name="form" action="./php/add-info.php" method="POST">
    <p class="danger"></p>
    <div class="elem-group">
    <label for="name">Numele:</label>
    <input type="text" id="name" name="visitor_name" placeholder="Erhan Ion" value="<?= htmlspecialchars($data_fetch['name'] ?? '') ?>">
    </div>
    <div class="elem-group">
    <label for="email">Adresa de email</label>
    <input type="email" id="email" name="visitor_email" placeholder="ErhanIon@mail.com" value="<?= htmlspecialchars($data_fetch['mail'] ?? '') ?>">
    </div>
    <div class="elem-group">
    <label for="phone">Numarul de telefon</label>
    <input type="tel" id="phone" name="visitor_phone" placeholder="498-348-3872" value="<?= htmlspecialchars($data_fetch['phone'] ?? '') ?>">
    </div>
    <input type="hidden" name="user_id" value="<?= htmlspecialchars($user_id) ?>">
    <div class="elem-group inlined">
    <label for="adult">Adulți</label>
    <input type="number" id="adult" name="total_adults" placeholder="2" min="1" value="<?= htmlspecialchars($data_fetch['adults'] ?? '') ?>">
    </div>
    <div class="elem-group inlined">
    <label for="child">Copii</label>
    <input type="number" id="child" name="total_children" placeholder="2" min="0" value="<?= htmlspecialchars($data_fetch['children'] ?? '') ?>">
    </div>
    <div class="elem-group inlined">
    <label for="checkin-date">Data de check-in</label>
    <input type="date" id="checkin_date" name="checkin" value="<?= htmlspecialchars($data_fetch['check-in'] ?? '') ?>">
    </div>
    <div class="elem-group">
    <label for="room-selection">Selectati preferintele</label>
    <select id="room-selection" name="room_preference">
      <option disabled <?= empty($data_fetch['preference']) ? 'selected' : '' ?>>Alegeti din lista de mai jos</option>
      <option value="Excursie" <?= $data_fetch['preference'] === "Excursie" ? "selected" : "" ?>>Excursie</option>
      <option value="Calatorie" <?= $data_fetch['preference'] === "Calatorie" ? "selected" : "" ?>>Calatorie</option>
      <option value="Tur turistic" <?= $data_fetch['preference'] === "Tur turistic" ? "selected" : "" ?>>Tur turistic</option>
    </select>
    </div>
    <div class="elem-group">
    <label for="message">Nota/ Sugestii/ Propuneri?</label>
    <textarea id="message" name="visitor_message" placeholder="Ce consideri ca nu este clar?!"><?= htmlspecialchars($data_fetch['add-ons'] ?? '') ?></textarea>
    </div>
    <button type="submit" class="offer" name="submit">Rezervati oferta</button>
  </form>
  </section>
  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
  }
  ?>
  <script type="module" src="./js/book.js"></script>
</body>
</html>
