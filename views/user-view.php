<?php

  $conn = OpenCon();


  $query = "SELECT user.id, user.username FROM `user`";
  $result = $conn->query($query);
  $data = $result->fetch_all(MYSQLI_ASSOC);
  $conn->close();
?>
<div class='link-wraper'>
  <a style='padding: 10px; background-color: var(--primary)' href="tambah-user.php">Tambah user</a>
</div>
<table>
  <tr>
    <th>No</th>
    <th>Username</th>
    <th colspan='2'>Action</th>
  </tr>
  <?php foreach($data as $key=>$row):?>
  <tr>
    <td><?= $key + 1?></td>
    <td><?= $row['username']?></td>
    <td>
      <a class='button delete' href='hapus-user.php?id=<?= $row['id']?>'>Hapus</a>
    </td>
    <td>
      <a class='button edit' href='edit-user.php?id=<?= $row['id']?>'>Edit</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>