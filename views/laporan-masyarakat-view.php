<?php

  $conn = OpenCon();
  $query = "SELECT * FROM laporan_masyarakat";
  
  $result = $conn->query($query);
  $data = $result->fetch_all();

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
      <th colspan='3'>Action</th>
    </tr>
    <?php if(mysqli_num_rows($result) < 1):?>
      <tr>
        <td colspan='8'>
          <h1 style='text-align: center;'>Tidak ada data</h1>
        </td>
      </tr>
    <?php else: ?>
      <?php foreach($data as $row):?>
        <tr>
          <td><?= $row[0]?> </td>
          <td><?= $row[2]?> </td>
          <td><?= $row[1]?> </td>
          <td><?php $timestamp = strtotime($row[6]);
                $time = date('Y-m-d H:i', $timestamp);
                echo $time;
          ?> </td>
          <td><?= $row[3]?> </td>
          <td><?= $row[4]?> </td>
          <td><?= $row[5]?> </td>
          <td>
            <a class='button delete'href="hapus-laporan-masyarakat.php?id=<?= $row[0]?>">Hapus</a>
          </td>
          <td>
            <a class='button edit'href="edit-laporan-masyarakat.php?id=<?= $row[0]?>">Edit</a>
          </td>
          <td>
            <a class='button download'href="pdf.php?id=<?= $row[0]?>">Download</a>
          </td>
        </tr>
      <?php endforeach;?>
    <?php endif;?>
  </table>