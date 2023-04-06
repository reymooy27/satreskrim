<?php
  $conn = OpenCon();
  $id;
  if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM user WHERE id='$id'";
    
    $result = $conn->query($query);
    $data = $result->fetch_assoc();
  }

  $conn->close();
?>


<form action="upload-edit-user.php?id=<?= $id?>" method='POST'>
  <h1>Form Edit User</h1>
  <div class='input-wraper'>
    <label for="username">Username</label>
    <input id='username' value="<?= $data['username'] ?>" required="true" type="text" name='username'>
  </div>
  <div class='input-wraper'>
    <label for="password">Password</label>
    <input id='password' value="<?= $data['password'] ?>" required="true" type="text" name='password'>
  </div>
  <button type='submit'>Submit</button>
</form>