<?php
  include 'db.php';
  session_start();
  $conn = OpenCon();

  if(isset($_POST['submit'])){
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$username){
      $_SESSION['signin'] = 'Username harus diisi';
    }elseif(!$password){
      $_SESSION['signin'] = 'Password harus diisi';
    }else{
      $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
      $success;
      $fetch_user = $conn->query($query);
      if (mysqli_num_rows($fetch_user) == 1){
        $user = mysqli_fetch_assoc($fetch_user);
        $_SESSION['user-id'] = $user['id'];
        header('Location: dashboard.php');
        exit();
      }else{
        $_SESSION['signin'] = 'User not found';
      }
    }

    if(isset($_SESSION['signin'])){
      header('Location: login.php');
      exit();
    }
  }else{
    header('Location: login.php');
    exit();
  }
?>