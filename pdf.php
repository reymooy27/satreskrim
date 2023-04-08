<?php 
// Konek ke server MySQL 
include 'db.php';
$conn = OpenCon();
$id;
$data;
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
  $query = "SELECT * FROM laporan_masyarakat WHERE id='$id'";
  
  $result = $conn->query($query);
  $data = $result->fetch_assoc();
}
$conn->close();

// Alamat file template 
$tpl_file = "tpl.rtf"; 
if (file_exists($tpl_file)) { 
  // Alamat file hasil parser 
  $target = "laporan.rtf"; 
  // Membuka file template 
  $f = fopen($tpl_file, "r+"); 
  $isi = fread($f, filesize($tpl_file)); 
  fclose($f); 
  // Query menampilkan data 
  
  // Menempatkan data pribadi kedalam template 
  $isi = str_replace('$nolaporan', $data['id'], $isi); 
  $isi = str_replace('$terlapor', $data['terlapor'], $isi); 
  $isi = str_replace('$pelapor', $data['pelapor'], $isi); 
  $datetime = new DateTime($data['tanggal'], new DateTimeZone('Asia/Jakarta'));
  $formadate = $datetime->format('d F Y H:i' );
  $isi = str_replace('$tanggal', $formadate, $isi); 
  $isi = str_replace('$kategori', $data['kategori'], $isi); 
  $isi = str_replace('$keterangan', $data['keterangan'], $isi); 
  $isi = str_replace('$alamat', $data['alamat'], $isi); 
  $f = fopen($target, "w+"); 
  fwrite($f, $isi); 
  fclose($f); 
  
  header('Content-Type: application/rtf');
  header('Content-Disposition: attachment; filename="laporan.rtf"');
  header('Cache-Control: private, max-age=0, must-revalidate');
  header('Pragma: public');
  readfile('laporan.rtf');
} 
?>