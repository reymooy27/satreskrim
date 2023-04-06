<?php
  $username = $_SESSION['add-user-data']['username'] ?? null;
  $password = $_SESSION['add-user-data']['password'] ?? null;
  $password_again = $_SESSION['add-user-data']['password_again'] ?? null;

  unset($_SESSION['add-user-data']);
?>


<form action="upload-tambah-user.php" method='POST'>
  <?php if(isset($_SESSION['add-user'])): ?>
    <p>
      <?= $_SESSION['add-user'];
      unset($_SESSION['add-user']);
      ?>
    </p>
  <?php endif ?>
  <h1>Form Tambah User</h1>
  <div class='input-wraper'>
    <label for="username">Username</label>
    <input id='username' value="<?= $username ?>" required="true" type="text" name='username'>
  </div>
  <div class='input-wraper'>
    <label for="password">Password</label>
    <input id='password' value="<?= $password ?>" required="true" type="text" name='password'>
  </div>
  <div class='input-wraper'>
    <label for="password_again">Ulangi Password</label>
    <input id='password_again' value="<?= $password_again ?>" required="true" type="text" name='password_again'>
  </div>
  <button type='submit'>Submit</button>
</form>