<?php
  include 'db.php';

  $conn = OpenCon();

  $nama = $_GET['nama'];


  $sql = "INSERT INTO jenis_kejahatan (nama) VALUES ('$nama')";

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
