<?php
  $conn = OpenCon();
      $id;
    if(isset($_REQUEST['id'])){
      $id = $_REQUEST['id'];
      $query = "SELECT * FROM lokasi_kriminal WHERE id='$id'";
      
      $result = $conn->query($query);
      $data = $result->fetch_assoc();
    }
  $conn->close();
?>


<form action="upload-edit-lokasi-kriminal.php?id=<?= $id?>" method='POST'>
  <h1>Form Lokasi Kriminal</h1>
  <div class='input-wraper'>
    <label for="jenis_kejahatan">Jenis Kejahatan</label>
    <input id='jenis_kejahatan' value=<?= $data['jenis_kejahatan']?> type="text" name='jenis_kejahatan'>
  </div>
  <div class='input-wraper'>
    <label for="alamat">Alamat</label>
    <input id='alamat' value=<?= $data['alamat']?> type="text" name='alamat'>
  </div>
  <div class='input-wraper'>
    <label for="kelurahan">Kelurahan</label>
    <input id='kelurahan' value=<?= $data['kelurahan']?> type="text" name='kelurahan'>
  </div>
  <div class='input-wraper'>
    <label for="kecamatan">Kecamatan</label>
    <input id='kecamatan' value=<?= $data['kecamatan']?> type="text" name='kecamatan'>
  </div>
  <div class='input-wraper'>
    <label for="koordinat">Koordinat</label>
    <div class='coordinate-wraper'>
      <input id='latitude' value=<?= $data['latitude']?> step='0.0000000000000001' placeholder='latitude' type="number" name='latitude'>
      <input id='longitude' value=<?= $data['longitude']?> step='0.0000000000000001' placeholder='longitude' type="number" name='longitude'>
    </div>
  </div>
  <button type='submit'>Submit</button>
</form>