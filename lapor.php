<?php
  session_start();


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

        </div>
        <div class='main'>
          <form action="upload-laporan-masyarakat.php" action='GET'>
            <h1>Form Laporan Masyarakat</h1>
            <div class='input-wraper'>
              <label for="terlapor">Terlapor</label>
              <input id='terlapor' required type="text" name='terlapor'>
            </div>
            <div class='input-wraper'>
              <label for="pelapor">Pelapor</label>
              <input id='pelapor' required type="text" name='pelapor'>
            </div>
            <div class='input-wraper'>
              <label for="kategori">Kategori</label>
              <input id='kategori' required type="text" name='kategori'>
            </div>
            <div class='input-wraper'>
              <label for="keterangan">Keterangan</label>
              <textarea id='keterangan' type="text" name='keterangan'></textarea>
            </div>
            <div class='input-wraper'>
              <label for="alamat">Alamat Lengkap</label>
              <input id='alamat' required type="text" name='alamat'>
            </div>
            <button type='submit'>Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>