<?php
  include 'db.php';
  session_start();
  $conn = OpenCon();

  $terlapor = $_GET['terlapor'];
  $pelapor = $_GET['pelapor'];
  $kategori = $_GET['kategori'];
  $alamat = $_GET['alamat'];
  $umur = $_GET['umur'];
  $agama = $_GET['agama'];
  $pekerjaan = $_GET['pekerjaan'];
  $no_telp = $_GET['no_telp'];
  $tempat_kejadian = $_GET['tempat_kejadian'];


  $sql = "INSERT INTO laporan_masyarakat (terlapor, pelapor, kategori, alamat, umur,agama,pekerjaan,no_telp,tempat_kejadian) VALUES ('$terlapor', '$pelapor', '$kategori', '$alamat','$umur','$agama','$pekerjaan','$no_telp','$tempat_kejadian')";

  $success;

  if ($conn->query($sql) === TRUE) {
      $success = true;
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  if($success){
    $_SESSION['laporan-success'] = 'Berhasil';
    header('Location: lapor.php');
    exit();
  }

  $conn->close();
?>

