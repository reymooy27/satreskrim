<?php

include 'db.php';
  $conn = OpenCon();
  session_start();

    if(isset($_REQUEST['id'])){
      if(isset($_SESSION['user-id'])){
        if($_REQUEST['id'] == $_SESSION['user-id']){
          header('Location: user.php');
          exit();
        }else{
          $id = $_REQUEST['id'];
          $query = "DELETE FROM post WHERE id_post='$id'";
          
          $result = $conn->query($query);
    
          header("Location: " . $_SERVER['HTTP_REFERER']);
          exit();
        }
      }

    }
  $conn->close();

?>