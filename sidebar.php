<div class='sidebar'>
  <a href="dashboard.php">Beranda</a>
  <?php if(isset($_SESSION['user-id'])):?>
    <a href="kelola-data-kriminal.php">Kelola Lokasi Kriminal</a>
    <a href="laporan-masyarakat.php">Laporan Masyarakat</a>
    <a href="post.php">Post</a>
    <!-- <a href="user.php">Admin</a> -->
    <a href="logout.php">Logout</a>
  <?php endif ?>
</div>
