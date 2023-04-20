<?php
  session_start();
  include 'db.php';
  $conn = OpenCon();

  $query = "SELECT * FROM `lokasi_kriminal`";
  $result = $conn->query($query);
  $data = $result->fetch_all(MYSQLI_ASSOC);

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
        <div class='main' style='padding: 0px;'>
          <div id='map' class='map'>
            <div>
              <div>
                <button id="btn" class="kasusBtn">Peta Administrasi</button>
              </div>
              <div id="petaAdministrasi" class="petaAdministrasi">
                <button id="close">
                  <img src="./img/iconmonstr-x-mark-lined-240.png" alt="">
                </button>
                <img src="./img/peta_malaka.jpg" alt="">
              </div>
            </div>
          </div>
            <div id='select-map' class='select-map'>Pilih titik di map</div>
          <?php if(isset($_SESSION['user-id'])): ?>  
            <button id='addButton' class='add-location' href=''>Tambah</button>
          <?php endif ?>  
        </div>
      </div>
    </div>
  </div>

  <script>
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
    })
  </script>
</body>

<?php 
  include 'map.php'
?>
</html>