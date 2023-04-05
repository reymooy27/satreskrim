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
          <div id='map' class='map'>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<script>
  var map = L.map('map').setView([-9.546622, 124.8656249], 13);
  map.on('click', (e)=>{
    console.log(e)
  })
  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
const popup = L.popup()

const marker = L.marker([-9.552366068532248, 124.85468223265403]).addTo(map);

marker.on('click',(e)=>{
 marker
 .bindPopup()
 .setPopupContent('Yuhuhuh')
})
</script>
</html>