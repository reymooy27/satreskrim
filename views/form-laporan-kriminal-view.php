<form action="upload.php" action='GET'>
  <h1>Form Laporan</h1>
  <div class='input-wraper'>
    <label for="terlapor">Terlapor</label>
    <input id='terlapor' type="text" name='terlapor'>
  </div>
  <div class='input-wraper'>
    <label for="pelapor">Pelapor</label>
    <input id='pelapor' type="text" name='pelapor'>
  </div>
  <div class='input-wraper'>
    <label for="kategori">Kategori</label>
    <input id='kategori' type="text" name='kategori'>
  </div>
  <div class='input-wraper'>
    <label for="keterangan">Keterangan</label>
    <input id='keterangan' type="text" name='keterangan'>
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
    <input id='kecamatan' type="text" name='kecamatan'>
  </div>
  <div class='input-wraper'>
    <label for="koordinat">Koordinat</label>
    <div class='coordinate-wraper'>
      <input id='latitude' placeholder='latitude' type="number" name='latitude'>
      <input id='longitude' placeholder='longitude' type="number" name='longitude'>
    </div>
  </div>
  <button type='submit'>Submit</button>
</form>