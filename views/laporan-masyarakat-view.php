<?php

  $conn = OpenCon();
  $query = "SELECT * FROM laporan_masyarakat";
  
  $result = $conn->query($query);

  $conn->close();
?>

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
    </tr>
    <?php
        while($row = $result->fetch_assoc()){
          echo "<tr><td>" . $row['id'] . "</td><td>" . $row['terlapor'] . "</td><td>" . $row['pelapor']. "</td><td>" . $row['tanggal'] . "</td><td>" . $row['kategori'] . "</td><td>" . $row['keterangan'] . "</td><td>" . $row['alamat'] . "</td><td>" . $row['kelurahan'] .  "</td><td>" . $row['kecamatan']  . "</td></tr>";
        }
      ?>
  </table>