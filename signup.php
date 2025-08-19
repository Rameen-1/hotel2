<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Signup</title></head>
<body>
<h2>Sign Up</h2>
<form action="" method="post">
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Register</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = $_POST['username'];
  $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $conn->query("INSERT INTO users (username, password) VALUES ('$user', '$pass')");
  echo "✅ Registered!";
}
?>
</body>
</html>
 
