<?php
include 'db.php';
  session_start();
  $conn = OpenCon();

  $querya = "SELECT * FROM jenis_kejahatan";
  $resulta = $conn->query($querya);
  $dataa = $resulta->fetch_all();
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
        <div>
          <img src="./img/logo.png" style="width: 30px;" alt="">
        </div>
        <div>
          <a href="login.php" style="border-radius: 5px; padding: 10px; background-color: white;">Login</a>
        </div>
        </div>
        <div class='main'>
          <?php if(isset($_SESSION['laporan-success'])):
            unset($_SESSION['laporan-success']);
          ?>
            <div class='success-alert'>
              <span>Berhasil membuat laporan</span>
            </div>
          <?php endif; ?>
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
              <label for="umur">Umur</label>
              <input id='umur' required type="text" name='umur'>
            </div>
            <div class='input-wraper'>
              <label for="agama">Agama</label>
              <input id='agama' required type="text" name='agama'>
            </div>
            <div class='input-wraper'>
              <label for="pekerjaan">Pekerjaan</label>
              <input id='pekerjaan' required type="text" name='pekerjaan'>
            </div>
            <div class='input-wraper'>
              <label for="alamat">Alamat</label>
              <input id='alamat' required type="text" name='alamat'>
            </div>
            <div class='input-wraper'>
              <label for="no_telp">No Telp</label>
              <input id='no_telp' required type="text" name='no_telp'>
            </div>
            <div class='input-wraper'>
              <label for="kategori">Tindak Pidana</label>
              <input id='kategori' required type="text" name='kategori'>
              <!-- <select name="kategori" id="kategori">
                <?php foreach($dataa as $row):?>
                  <option value="<?= $row[1]?>"><?= $row[1]?></option>
                <?php endforeach?>
              </select> -->
            </div>
            <div class='input-wraper'>
              <label for="tempat_kejadian">Tempat Kejadian</label>
              <input id='tempat_kejadian' required type="text" name='tempat_kejadian'>
            </div>
            
            <button type='submit'>Submit</button>
          </form>
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
</script>
</body>

</html>