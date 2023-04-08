<?php
  session_start();
  include 'db.php';
  $conn = OpenCon();


  $query = "SELECT * FROM `lokasi_kriminal`";
  $result = $conn->query($query);
  $data = $result->fetch_all(MYSQLI_ASSOC);
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
      <a href="index.php">Beranda</a>
        <a href="lapor.php">Lapor</a>
        <a href="kontak.php">Contact Us</a>
      </div>
      <div class='main-wraper'>
        <div class='header'>
        <div>
          <img id='menu'src='./img./iconmonstr-menu-left-lined-240.png' style="width: 30px; height: 30px" />
        </div>
        </div>
        <div class='main' style='padding: 0px;'>
          <div id='map' class='map'>

          </div>
        </div>
      </div>
    </div>
  </div>
 
</body>

<?php
  include 'map.php'
?>
</html>