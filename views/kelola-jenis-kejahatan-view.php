<?php

  $conn = OpenCon();
  $query = "SELECT * FROM jenis_kejahatan";
  
  $result = $conn->query($query);
  $data =$result->fetch_all();

  $conn->close();
?>

<div>
<div class='link-wraper'>
    <a style='padding: 10px; background-color: var(--primary)' href="form-jenis-kejahatan.php">Tambah Jenis Kejahatan</a>
  </div>
  <table>
    <tr>
      <th>No</th>
      <th>Jenis Kejahatan</th>
      <th colspan='2'>Action</th>
    </tr>
    <?php if(mysqli_num_rows($result) < 1):?>
      <tr>
        <td colspan='8'>
          <h1 style='text-align: center;'>Tidak ada data</h1>
        </td>
      </tr>
    <?php else: ?>
    <?php foreach($data as $key=>$row): ?>
      <tr>
        <td><?= $key + 1 ?></td>
        <td><?= $row[1]?></td>
        <td>
          <a class='button delete' href='hapus-jenis-kejahatan.php?id=<?= $row[0]?>'>Hapus</a>
        </td>
        <td>
          <a class='button edit' href="edit-jenis-kejahatan.php?id=<?= $row[0]?>">Edit</a>
        </td>
      </tr>
    <?php endforeach; ?>
    <?php endif; ?>
  </table>
</div>