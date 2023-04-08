<?php
  $conn = OpenCon();
      $id;
    if(isset($_REQUEST['id'])){
      $id = $_REQUEST['id'];
      $query = "SELECT * FROM laporan_masyarakat WHERE id='$id'";
      
      $result = $conn->query($query);
      $data = $result->fetch_assoc();
    }


  $querya = "SELECT * FROM jenis_kejahatan";
  $resulta = $conn->query($querya);
  $dataa = $resulta->fetch_all();
  $conn->close();
?>

<form action="upload-edit-laporan-masyarakat.php?id=<?= $id?>" method='POST'>
    <h1>Form Laporan Masyarakat</h1>
    <div class='input-wraper'>
      <label for="terlapor">Terlapor</label>
      <input id='terlapor' required value="<?= $data['terlapor']?>" type="text" name='terlapor'>
    </div>
    <div class='input-wraper'>
      <label for="pelapor">Pelapor</label>
      <input id='pelapor' required value="<?= $data['pelapor']?>" type="text" name='pelapor'>
    </div>
    <div class='input-wraper'>
      <label for="kategori">Kategori</label>
      <select name="kategori" id="kategori">
      <?php foreach($dataa as $row):?>
        <option value="<?= $row[1]?>" <?php if($data['kategori'] ==  $row[1]) { echo 'selected="selected"'; } ?>><?= $row[1]?></option>
      <?php endforeach?>
    </select>
    </div>
    <div class='input-wraper'>
      <label for="keterangan">Keterangan</label>
      <input id='keterangan' required value="<?= $data['keterangan']?>" type="text" name='keterangan'>
    </div>
    <div class='input-wraper'>
      <label for="alamat">Alamat Lengkap</label>
      <input id='alamat' required value="<?= $data['alamat']?>" type="text" name='alamat'>
    </div>
    <button type='submit' name='submit'>Submit</button>
  </form>