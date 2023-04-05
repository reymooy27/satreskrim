<?php
  include 'db.php';

  $conn = OpenCon();

  $alamat = $_GET['alamat'];
  $kelurahan = $_GET['kelurahan'];
  $kecamatan = $_GET['kecamatan'];
  $latitude = $_GET['latitude'];
  $longitude = $_GET['longitude'];

  $sql = "INSERT INTO lokasi_kriminal (alamat, kelurahan, kecamatan, latitude, longitude) VALUES ('$alamat', '$kelurahan', '$kecamatan', '$latitude', '$longitude')";

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
