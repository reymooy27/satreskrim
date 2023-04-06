<?php
  include 'db.php';

  $conn = OpenCon();

  $jenis_kejahatan = $_GET['jenis_kejahatan'];
  $alamat = $_GET['alamat'];
  $kelurahan = $_GET['kelurahan'];
  $kecamatan = $_GET['kecamatan'];
  $latitude = $_GET['latitude'];
  $longitude = $_GET['longitude'];

  $sql = "INSERT INTO lokasi_kriminal (jenis_kejahatan, alamat, kelurahan, kecamatan, latitude, longitude) VALUES ('$jenis_kejahatan', '$alamat', '$kelurahan', '$kecamatan', '$latitude', '$longitude')";

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
