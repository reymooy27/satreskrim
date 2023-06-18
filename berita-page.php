<?php
  session_start();
  include 'db.php';
  $conn = OpenCon();

  $id_post = $_REQUEST['id'];
  $query = "SELECT * FROM `post` WHERE id_post = $id_post";
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
        <a href="berita.php">Berita</a>
        <a href="kontak.php">Contact Us</a>
      </div>
      <div class='main-wraper'>
        <div class='header'>
        <!-- <div>
          <img id='menu'src='./img./iconmonstr-menu-left-lined-240.png' style="width: 30px; height: 30px" />
        </div> -->
        <div style="display: flex; gap: 10px; align-items: center;">
          <img src="./img/logo.png" style="width: 30px;" alt="">
          <h1>Satreskrim</h1>
        </div>
        </div>
        <div class='main' style='padding: 20px;'>
         <h1 style="font-size: 28px; margin-bottom: 30px;"><?= $data[0]['title']?></h1>
           <div>
             <img src="<?= $data[0]['image']?>" style="height: 400px; width: 100%; object-fit: cover;" alt="">
           </div>
         <div style="margin-top: 40px">
          
            <p id="text"><?= nl2br($data[0]['body'])?></p>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const text = document.getElementById('text').innerHTML
    const link = document.getElementById('link')
const pattern = /(https?:\/\/\S+)/g;
const replacedText = text.replace(pattern, '<a href="$1">$1</a>');
link.setAttribute('href',pattern)

console.log(replacedText);
  </script>
  
 
</body>

</html>