<?php

include 'db.php';
  $conn = OpenCon();

    if(isset($_REQUEST['id'])){
      $id = $_REQUEST['id'];
      $query = "DELETE FROM jenis_kejahatan WHERE id='$id'";
      
      $result = $conn->query($query);

      header('Location: kelola-jenis-kejahatan.php');
      exit();

    }
  $conn->close();

?>