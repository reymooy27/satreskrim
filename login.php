<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class='container'>
    <div class='login-container'>
      <form action="login-admin.php" method='POST'>
        <?php if(isset($_SESSION['signin'])): ?>
          <h1>
            <?= $_SESSION['signin'];
            unset($_SESSION['signin']);
            ?>
          </h1>
        <?php endif ?>
        <label for="username">Username</label>
        <input type="text" name='username'>
        <label for="password">Password</label>
        <input type="password" name='password'>
        <button type='submit' name='submit' >Login</button>
      </form>
    </div>
  </div>
</body>
</html>