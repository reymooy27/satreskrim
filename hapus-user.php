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
          $query = "DELETE FROM user WHERE id='$id'";
          
          $result = $conn->query($query);
    
          header('Location: user.php');
          exit();
        }
      }

    }
  $conn->close();

?>