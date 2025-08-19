<?php include 'db.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login</h2>
<form action="" method="post">
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Login</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $res = $conn->query("SELECT * FROM users WHERE username = '$user'");
  if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
      $_SESSION['user'] = $user;
      echo "✅ Logged in!";
    } else {
      echo "❌ Invalid password.";
    }
  } else {
    echo "❌ User not found.";
  }
}
?>
</body>
</html>
 
