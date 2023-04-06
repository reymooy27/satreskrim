<?php
  include 'db.php';

  $conn = OpenCon();
  $id = $_REQUEST['id'];
  $terlapor = $_POST['terlapor'];
  $pelapor = $_POST['pelapor'];
  $kategori = $_POST['kategori'];
  $keterangan = $_POST['keterangan'];
  $alamat = $_POST['alamat'];


  $sql = "UPDATE laporan_masyarakat SET terlapor='$terlapor', pelapor='$pelapor', kategori='$kategori', keterangan='$keterangan', alamat='$alamat' WHERE id='$id'";

  $success;

  if ($conn->query($sql) === TRUE) {
      $success = true;
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  if($success){
    header('Location: laporan-masyarakat.php');
    exit();
  }

  $conn->close();
?>

