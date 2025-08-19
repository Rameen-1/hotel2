<?php
include 'db.php';
$id = $_GET['id'];
$in = $_GET['in'];
$out = $_GET['out'];
 
$hotel = $conn->query("SELECT * FROM hotels WHERE id = $id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Book <?= $hotel['name'] ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Booking: <?= $hotel['name'] ?></h2>
  <form action="confirm.php" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="hidden" name="checkin" value="<?= $in ?>">
    <input type="hidden" name="checkout" value="<?= $out ?>">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <button type="submit">Confirm Booking</button>
  </form>
</body>
</html>
 
 
