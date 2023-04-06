<?php

include 'db.php';
  $conn = OpenCon();

    if(isset($_REQUEST['id'])){
      $id = $_REQUEST['id'];
      $query = "DELETE FROM laporan_masyarakat WHERE id='$id'";
      
      $result = $conn->query($query);

      header('Location: laporan-masyarakat.php');
      exit();

    }
  $conn->close();

?>