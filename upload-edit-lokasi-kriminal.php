<?php
  include 'db.php';

  $conn = OpenCon();
  $id = $_REQUEST['id'];
  $jenis_kejahatan = $_POST['jenis_kejahatan'];
  $alamat = $_POST['alamat'];
  $kelurahan = $_POST['kelurahan'];
  $kecamatan = $_POST['kecamatan'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];


  $sql = "UPDATE lokasi_kriminal SET jenis_kejahatan='$jenis_kejahatan', alamat='$alamat', kelurahan='$kelurahan', kecamatan='$kecamatan', latitude='$latitude', longitude='$longitude' WHERE id='$id'";

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

