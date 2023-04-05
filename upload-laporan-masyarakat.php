<?php
  include 'db.php';

  $conn = OpenCon();

  $terlapor = $_GET['terlapor'];
  $pelapor = $_GET['pelapor'];
  $kategori = $_GET['kategori'];
  $keterangan = $_GET['keterangan'];
  $alamat = $_GET['alamat'];
  $kelurahan = $_GET['kelurahan'];
  $kecamatan = $_GET['kecamatan'];

  echo $terlapor;

  $sql = "INSERT INTO laporan_masyarakat (terlapor, pelapor, kategori, keterangan, alamat, kelurahan, kecamatan) VALUES ('$terlapor', '$pelapor', '$kategori', '$keterangan', '$alamat', '$kelurahan', '$kecamatan')";

  $success;

  if ($conn->query($sql) === TRUE) {
      $success = true;
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  if($success){
    header('Location: index.php');
    exit();
  }

  $conn->close();
?>

