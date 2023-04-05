<form action="upload-lokasi-laporan.php" action='GET'>
  <h1>Form Lokasi Laporan</h1>
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