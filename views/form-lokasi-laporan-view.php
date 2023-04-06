<?php

?>

<form action="upload-lokasi-laporan.php" action='GET'>
  <h1>Form Lokasi Kriminal</h1>
  <div class='input-wraper'>
    <label for="jenis_kejahatan">Jenis Kejahatan</label>
    <input id='jenis_kejahatan' required type="text" name='jenis_kejahatan'>
  </div>
  <div class='input-wraper'>
    <label for="alamat">Alamat</label>
    <input id='alamat' required type="text" name='alamat'>
  </div>
  <div class='input-wraper'>
    <label for="kelurahan">Kelurahan</label>
    <input id='kelurahan' required type="text" name='kelurahan'>
  </div>
  <div class='input-wraper'>
    <label for="kecamatan">Kecamatan</label>
    <input id='kecamatan' required type="text" name='kecamatan'>
  </div>
  <div class='input-wraper'>
    <label for="koordinat">Koordinat</label>
    <div class='coordinate-wraper'>
      <input id='latitude' value="<?=$_REQUEST['lat'] ?? null?>" step='0.0000000000000001' placeholder='latitude' type="number" name='latitude'>
      <input id='longitude' value="<?=$_REQUEST['lng'] ?? null?>" step='0.0000000000000001' placeholder='longitude' type="number" name='longitude'>
    </div>
  </div>
  <button type='submit'>Submit</button>
</form>