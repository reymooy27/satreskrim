<?php
  include 'db.php';

  $conn = OpenCon();

  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_again = $_POST['password_again'];

  $sql = "SELECT user.username FROM user WHERE user.username='$username'";
  $result = $conn->query($sql);
  if(mysqli_num_rows($result) > 0){
    $_SESSION['add-user'] = 'Username sudah terpakai';
  }elseif(!$username){
    $_SESSION['add-user'] = 'Anda harus mengisi username';
  }elseif(!$password){
    $_SESSION['add-user'] = 'Anda harus mengisi password';
  }elseif(!$password_again){
    $_SESSION['add-user'] = 'Anda harus mengisi password';
  }elseif($password !== $password_again){
    $_SESSION['add-user'] = 'Password harus sama';
  }else{
    $sql = "INSERT INTO user (username, password) VALUES('$username', '$password')";
    $conn->query($sql);
    header('Location: user.php');
    exit();
  }

  if(isset($_SESSION['add-user'])){
    $_SESSION['add-user-data'] = $_POST;
    header('Location: tambah-user.php');
    exit();
  }

  $conn->close();
?>

