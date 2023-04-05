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
  $latitude = $_GET['latitude'];
  $longitude = $_GET['longitude'];

  echo $terlapor;

  $sql = "INSERT INTO data_kriminal (terlapor, pelapor, kategori, keterangan, alamat, kelurahan, kecamatan, latitude, longitude) VALUES ('$terlapor', '$pelapor', '$kategori', '$keterangan', '$alamat', '$kelurahan', '$kecamatan', '$latitude', '$longitude')";

  $success;

  if ($conn->query($sql) === TRUE) {
      $success = true;
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  if($success){
    header('Location: kelola-data-kriminal.php');
    exit();
  }

  $conn->close();
?>

