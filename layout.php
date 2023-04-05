<?php

  include 'db.php';
  $conn = OpenCon();


  $user;

  if(isset($_SESSION['user-id'])){
    $id = $_SESSION['user-id'];
    $query = "SELECT * FROM user WHERE id='$id'";
    $result = $conn->query($query);
    $user = mysqli_fetch_assoc($result);
  }

  $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./leaflet/leaflet.css">
  <script src='./leaflet/leaflet.js'></script>
</head>
<body>
  <div class='container'>
    <div class='wraper'>
      <div class='sidebar'>
        <a href="dashboard.php">Beranda</a>
        <a href="kelola-data-kriminal.php">Kelola Data Kriminal</a>
        <a href="laporan-masyarakat.php">Laporan Masyarakat</a>
        <?php if(isset($_SESSION['user-id'])):?>
          <a href="logout.php">Logout</a>
        <?php endif ?>
      </div>
      <div class='main-wraper'>
        <div class='header'>
        <?php if(isset($_SESSION['user-id'])):?>
            <h1><?= $user['username']?></h1>
          <?php else:?>
            <a class='login-button' href="login.php">Login</a>
          <?php endif ?>
        </div>
        <div class='main'>
          <?php include($childview); ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
