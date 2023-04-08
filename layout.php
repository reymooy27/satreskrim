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
      <?php include 'sidebar.php'?>
      <div class='main-wraper'>
        <?php include 'header.php'?>
        <div class='main'>
          <?php include($childview); ?>
        </div>
      </div>
    </div>
  </div>
 <script>
  const menu = document.getElementById('menu')
  const sidebar = document.getElementsByClassName('sidebar')
  menu.addEventListener('click',()=>{
    sidebar[0].classList.toggle('open')
  })
  
  const closeButton = document.getElementById('closeButton')
  closeButton.addEventListener('click',()=>{
    console.log('click')
  })
 </script>
</body>
</html>
