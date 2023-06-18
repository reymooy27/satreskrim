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
        <a href="berita.php">Berita</a>
        <a href="lapor.php">Lapor</a>
        <a href="kontak.php">Contact Us</a>
      </div>
      <div class='main-wraper'>
        <div class='header'>
        <div style="display: flex; gap: 10px; align-items: center;">
          <img src="./img/logo.png" style="width: 30px;" alt="">
          <h1>Satreskrim</h1>
        </div>
        <div>
          <a href="login.php" style="border-radius: 5px; padding: 10px; background-color: white;">Login</a>
        </div>
        </div>
        <div class='main' style='padding: 0px;'>
          <div id='map' class='map'>
          <div class="buttonGroup">
            <button id="btn" class="">Peta Administrasi</button>
            <button class="" id="jumlahKasus">Jumlah Kasus</button>
          </div>
          <div id="petaAdministrasi" class="petaAdministrasi">
            <button id="close">
              <img src="./img/iconmonstr-x-mark-lined-240.png" alt="">
            </button>
            <img src="./img/peta_malaka.jpg" alt="">
          </div>
            <div class="kasus" id="kasus">
              <div class="kasus-item">
                <span>Tahun 2020</span>
                <div>
                  <h2>95</h2>
                  <span>Kasus</span>
                </div>
              </div>
              <div class="kasus-item">
                <span>Tahun 2021</span>
                <div>
                  <h2>104</h2>
                  <span>Kasus</span>
                </div>
              </div>
              <div class="kasus-item">
                <span>Tahun 2022</span>
                <div>
                  <h2>207</h2>
                  <span>Kasus</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const kasusBtn = document.getElementById('jumlahKasus')
    const kasus = document.getElementById('kasus')
    const btn = document.getElementById('btn')
    const peta = document.getElementById('petaAdministrasi')
    const map = document.getElementById('map')
    const close = document.getElementById('close')

    close.addEventListener('click', ()=>{
      peta.classList.remove('view')
      console.log('click')
    })
    btn.addEventListener('click', ()=>{
      peta.classList.toggle('view')
      kasus.classList.remove('view')
    })
    console.log(kasus)

    // map.addEventListener('click', ()=>{
    //   kasus.classList.remove('view')
    // })

    kasusBtn.addEventListener('click', ()=>{
      console.log('dw')
      kasus.classList.toggle('view')
      peta.classList.remove('view')
    })

  </script>
 
</body>

<?php
  include 'map.php'
?>
</html>