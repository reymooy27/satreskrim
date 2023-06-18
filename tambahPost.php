<?php
  require './db.php';
  $conn = OpenCon();

  if(isset($_POST['submit'])){
    $body = $_POST['body'];
    $title = $_POST['title'];
    $image = $_FILES['foto'];


    $target_dir = "./uploads/";
    $random_string = uniqid();
    $target_file = $target_dir . $random_string . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    if (!move_uploaded_file($image["tmp_name"], $target_file)) {
      // handle the error
      die('Error moving file.');
    }

    $basename = basename($target_file);
    $imagePath = 'uploads/' . $basename;

    $sql = "INSERT INTO post (body, image, title) VALUES('$body', '$imagePath','$title')";

  
    // Move the uploaded image to a permanent location on the server
    try{
      $result = $conn->query($sql);
      header("Location: " . $_SERVER['HTTP_REFERER']);
      exit();
    }catch(PDOException $e){
      header("Location: " . $_SERVER['HTTP_REFERER']);
      exit();
    }
  }
  

  $conn->close();
?>