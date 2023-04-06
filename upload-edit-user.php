<?php
  include 'db.php';

  $conn = OpenCon();
  $id = $_REQUEST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];



  $sql = "UPDATE user SET username='$username', password='$password' WHERE id='$id'";

  $success;

  if ($conn->query($sql) === TRUE) {
      $success = true;
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  if($success){
    header('Location: user.php');
    exit();
  }

  $conn->close();
?>

