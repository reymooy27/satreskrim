<?php
  session_start();
  include 'db.php';
  $conn = OpenCon();


  $query = "SELECT * FROM `post`";
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
      <a href="berita.php">Berita</a>
        <a href="lapor.php">Lapor</a>
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
        <div>
          <a href="login.php" style="border-radius: 5px; padding: 10px; background-color: white;">Login</a>
        </div>
        </div>
        <div class='main' style='padding: 20px;'>
         <h1 style="font-size: 28px; margin-bottom: 30px;">Berita</h1>
         <!-- <a href="berita-page.php?id=<?= $data[0]['id_post']?>">
           <div>
             <img src="<?= $data[0]['image']?>" style="height: 400px; width: 100%; object-fit: cover;" alt="">
             <h1 style="font-size: 24px;"><?= $data[0]['title']?></h1>
           </div>
         </a> -->
         <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 40px">
            <?php foreach($data as $key=>$row):?>
              <div class='main' style='padding: 20px;'>
                <h1 style="font-size: 28px; margin-bottom: 30px;"><?= $row['title']?></h1>
                  <div>
                    <img src="<?= $row['image']?>" style="height: 400px; width: 100%; object-fit: cover;" alt="">
                  </div>
                <div style="margin-top: 40px">
                  
                    <p id="text"><?= nl2br($row['body'])?></p>
                  </div>
                    </div>
              <?php endforeach?>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
 
</body>

</html>