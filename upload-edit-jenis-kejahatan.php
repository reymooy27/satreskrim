<?php
  include 'db.php';

  $conn = OpenCon();
  $id = $_REQUEST['id'];
  $nama = $_POST['nama'];


  $sql = "UPDATE jenis_kejahatan SET nama='$nama' WHERE id='$id'";

  $success;

  if ($conn->query($sql) === TRUE) {
      $success = true;
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  if($success){
    header('Location: kelola-jenis-kejahatan.php');
    exit();
  }

  $conn->close();
?>

