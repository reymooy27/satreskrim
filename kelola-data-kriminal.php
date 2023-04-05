<?php
  session_start();

  if(isset($_SESSION['user-id']) == null){
    $childview = 'views/need-login.php';
    include('layout.php');
  }else{
    $childview = 'views/kelola-data-kriminal-view.php';
    include('layout.php');
  }
?>
