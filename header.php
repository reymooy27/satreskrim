<div class='header'>
  <?php if(isset($_SESSION['user-id'])):?>
    <div class='avatar-container'>
      <div class='avatar'></div>
      <span><?= $user['username']?></span>
    </div>
  <?php else:?>
    <a class='login-button' href="login.php">Login</a>
  <?php endif ?>
</div>