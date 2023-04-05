<?php

  $conn = OpenCon();
  $query = "SELECT * FROM data_kriminal";
  
  $result = $conn->query($query);

  $conn->close();
?>

<div>
  <div class='link-wraper'>
    <a href="form-laporan-kriminal.php">Form Laporan Kriminal</a>
    <a href="form-lokasi-laporan.php">Form Lokasi Laporan</a>
  </div>
  <table>
    <tr>
      <th>No Laporan</th>
      <th>Terlapor</th>
      <th>Pelapor</th>
      <th>Tanggal</th>
      <th>Kategori</th>
      <th>Keterangan</th>
      <th>Alamat</th>
      <th>Kecamatan</th>
      <th>Kelurahan</th>
      <th>Latitude</th>
      <th>Longitude</th>
    </tr>
    <?php
        while($row = $result->fetch_assoc()){
          echo "<tr><td>" . $row['id'] . "</td><td>" . $row['terlapor'] . "</td><td>" . $row['pelapor']. "</td><td>" . $row['tanggal_lapor'] . "</td><td>" . $row['kategori'] . "</td><td>" . $row['keterangan'] . "</td><td>" . $row['alamat'] . "</td><td>" . $row['kelurahan'] .  "</td><td>" . $row['kecamatan'] . "</td><td>" . $row['latitude'] . "</td><td>"  . $row['longitude'] . "</td></tr>";
        }
      ?>
  </table>
</div>
