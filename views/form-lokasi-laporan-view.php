<?php
  $conn = OpenCon();


  $query = "SELECT * FROM `jenis_kejahatan`";
  $result = $conn->query($query);
  $data = $result->fetch_all();
  $conn->close();

?>

<form action="upload-lokasi-laporan.php" action='GET'>
  <h1>Form Lokasi Kriminal</h1>
  <div class='input-wraper'>
    <label for="jenis_kejahatan">Jenis Kejahatan</label>
    <select name="jenis_kejahatan" id="jenis_kejahatan">
      <?php foreach($data as $row):?>
        <option value="<?= $row[1]?>"><?= $row[1]?></option>
      <?php endforeach?>
    </select>
  </div>
  <div class='input-wraper'>
    <label for="alamat">Alamat</label>
    <input id='alamat' type="text" name='alamat'>
  </div>
  <div class='input-wraper'>
    <label for="kelurahan">Kelurahan</label>
    <input id='kelurahan' type="text" name='kelurahan'>
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