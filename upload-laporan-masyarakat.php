<?php
  include 'db.php';

  $conn = OpenCon();

  $terlapor = $_GET['terlapor'];
  $pelapor = $_GET['pelapor'];
  $kategori = $_GET['kategori'];
  $keterangan = $_GET['keterangan'];
  $alamat = $_GET['alamat'];

  echo $terlapor;

  $sql = "INSERT INTO laporan_masyarakat (terlapor, pelapor, kategori, keterangan, alamat) VALUES ('$terlapor', '$pelapor', '$kategori', '$keterangan', '$alamat')";

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

