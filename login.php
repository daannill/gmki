<?php
  require_once "./config/koneksi.php";
  require_once "./backend/login_logic.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>

<div class="login-box">
  <h2>Login</h2>
  <?php
    if($error) {
      echo "$error";
    }
  ?>

  <form method="POST">
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" required>
    </div>

    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" required>
    </div>

    <button type="submit">Login</button>
  </form>

  <a href="../gmki"><button style="margin-top: 5px;">Back</button></a>
</div>

</body>
</html>