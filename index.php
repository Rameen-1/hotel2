<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>CyberCruise Hotels</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>CyberCruise Hotel Booking</h1>
  <form action="listings.php" method="get">
    <input type="text" name="location" placeholder="Search Location..." required>
    <input type="date" name="checkin" required>
    <input type="date" name="checkout" required>
    <button type="submit">Search</button>
  </form>
</body>
</html>
 
