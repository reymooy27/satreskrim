<?php

include 'db.php';
  $conn = OpenCon();

    if(isset($_REQUEST['id'])){
      $id = $_REQUEST['id'];
      $query = "DELETE FROM lokasi_kriminal WHERE id='$id'";
      
      $result = $conn->query($query);

      header('Location: kelola-data-kriminal.php');
      exit();

    }
  $conn->close();

?>