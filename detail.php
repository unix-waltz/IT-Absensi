<?php 
require_once "includes/Header.php";
require_once 'Model/db.php';
if(isset($_GET['del'])){
    $id = $_GET['del'];
$sql =mysqli_query($conn,"SELECT * FROM riwayat WHERE id = '$id' ORDER BY id DESC");
$sql = mysqli_fetch_object($sql);
}
?>

<br><br><br><br><br>
<div class="container">
    <h2 align="center">Detail Riwayat</h2>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Absen Hari Ini</th>
      <th scope="col">Izin Hari Ini</th>
      <th scope="col">Kehadiran Hari Ini</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">&nbsp; <?= $sql->waktu ?></th>
      <td colspan=""><?= $sql->absen ?></td>
      <td><?= $sql->izin ?></td>
      <td><?= $sql->hadir ?></td>
    </tr>
  </tbody>
</table>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once "includes/Footer.php"; ?>