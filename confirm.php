<?php
include 'db.php';
 
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$in = $_POST['checkin'];
$out = $_POST['checkout'];
 
$conn->query("INSERT INTO bookings (hotel_id, name, email, checkin, checkout) VALUES ($id, '$name', '$email', '$in', '$out')");
 
echo "<h2>✅ Booking Confirmed!</h2>";
echo "<p>$name, your stay is confirmed from $in to $out.</p>";
?>
 
