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
          <h1 style="font-size: 30px">Kontak</h1>
          <div style="display: flex; flex-direction: column; gap: 10px;">
            <form action="email.php" method="POST" style="border: none; margin: 20px 0; padding: 0;">
              <label for="nama">Nama</label>
              <input type="text" name="nama" required>
              <label for="pesan">Pesan</label>
              <textarea name="laporan" id="" cols="30" rows="10" required></textarea>
              <button type="submit" name="submit">Submit</button>
              <?php if(isset($_SESSION['email-sent'])): unset($_SESSION['email-sent'])?>
                <div style="background: #0cd90c;padding: 10px;border-radius: 10px;">Email berhasil terkirim</div>
              <?php endif?>
              <div></div>
            </form>
            <div style="margin-top: 20px;">
              <h1>Email : satreskrimmalaka07@gmail.com</h1>
              <div style="display: flex; flex-direction: column;">
                <a style="font-weight: bold; text-decoration: underline; color: blue;" href="https://wa.me/6282144369177">Kontak Whatsapp : 082144369177</a>
                <a style="font-weight: bold; text-decoration: underline; color: blue;" href="https://wa.me/6281339982653">Kontak Whatsapp : 081339982653</a>
              </div>
            </div>
          </div>
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