<div class='header'>
  <!-- <div>
    <img id='menu'src='./img./iconmonstr-menu-left-lined-240.png' style="width: 30px; height: 30px" />
  </div> -->
  <div>
    <img src="./img/logo.png" style="width: 30px;" alt="">
  </div>
  <?php if(isset($_SESSION['user-id'])):?>
    <a href='user.php' class='avatar-container'>
      <div class='avatar'>
        <img src="./img/iconmonstr-user-19-240.png" alt="" style='width:100%'>
      </div>
      <span><?= $user['username']?></span>
    </a>
  <?php else:?>
    <a class='login-button' href="login.php">Login</a>
  <?php endif ?>
</div>