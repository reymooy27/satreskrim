<form action="tambahPost.php" method="POST" enctype="multipart/form-data">
  <h2 style="font-size: 24px;">Post</h2>
  <div style="display: flex; flex-direction: column;">
    <label for="title">Judul</label>
    <input required type="text" name="title"> 
  </div>
  <div style="display: flex; flex-direction: column;">
    <label class="form-label" for="foto">Foto</label>
    <input required style="border: none;" type="file" accept="image/*" name="foto" id="foto">
  </div>
  <div style="display: flex; flex-direction: column;">
    <label for="body">Text</label>
    <textarea required type="text" name="body"></textarea>
  </div>
  <button name="submit" type="submit">Submit</button>
</form>

<?php
   $conn = OpenCon();

   $query = "SELECT * FROM `post`";
   $result = $conn->query($query);
   $data = $result->fetch_all(MYSQLI_ASSOC);
  // echo json_encode($data);
   $conn->close();
?>
<div style="margin-top: 30px;">
<h1 style="font-size: 28px; margin-bottom: 20px">Berita</h1>
<div style="display: flex; flex-wrap: wrap; gap: 10px">
  <?php foreach($data as $key=>$row):?>
    <a href="berita-page.php?id=<?= $row['id_post']?>">
      <div style="position: relative;">
        <img src="<?= $row['image']?>" style="height: 100px; width: 200px; object-fit: cover; border-radius: 10px" alt="">
        <h5><?= $row['title']?></h5>
        <a href="hapusPost.php?id=<?= $row['id_post']?>" style="position: absolute; top: 5px; right: 5px; background-color: red; border-radius: 5px;">Delete</a>
      </div>
    </a>
    <?php endforeach?>
</div>
</div>