<?php
include 'db.php';
 
$location = $_GET['location'];
$checkin = $_GET['checkin'];
$checkout = $_GET['checkout'];
 
$sql = "SELECT * FROM hotels WHERE LOWER(location) LIKE LOWER('%$location%')";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hotel Listings</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Hotels in <?= htmlspecialchars($location) ?></h2>
  <?php if ($result->num_rows > 0): ?>
    <?php while($row = $result->fetch_assoc()): ?>
      <div class="hotel-card">
        <img src="uploads/<?= $row['image'] ?>" width="200">
        <h3><?= $row['name'] ?></h3>
        <p><?= $row['description'] ?></p>
        <p><strong>AED <?= $row['price'] ?></strong></p>
        <p>Rating: <?= $row['rating'] ?>⭐</p>
        <a href="book.php?id=<?= $row['id'] ?>&in=<?= $checkin ?>&out=<?= $checkout ?>">Book Now</a>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <p>🚫 No hotels found for '<?= htmlspecialchars($location) ?>'</p>
  <?php endif; ?>
</body>
</html>
 
