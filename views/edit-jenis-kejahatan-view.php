<?php
  $conn = OpenCon();
  $id;
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
  $query = "SELECT * FROM jenis_kejahatan WHERE id='$id'";
  
  $result = $conn->query($query);
  $data = $result->fetch_assoc();
}

$conn->close();
?>
<form action="upload-edit-jenis-kejahatan.php?id=<?= $id?>" method='POST'>
  <h1>Form Jenis Kejahatan</h1>
  <div class='input-wraper'>
    <label for="nama">Jenis Kejahatan</label>
    <input id='nama' value="<?= $data['nama']?>" required type="text" name='nama'>
  </div>
  <button type='submit'>Submit</button>
</form>