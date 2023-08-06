<?php 
require_once "includes/Header.php";
require_once "Model/db.php";
$num = 1;
if(isset($_GET['sbtn'])){
$form = $_GET['search'];
$query = mysqli_query($conn , "SELECT * FROM data_tbl WHERE name LIKE '%$form%' or class LIKE '%$form%' or divisi like '%$form%'");
}else{
$query = mysqli_query($conn , "SELECT * FROM data_tbl");
}
?>
<br><br>
<br><br><br>
<div class="container">
    <h5 align="center">
      hasil pencarian untuk <?= $form; ?>
    </h5>
    <br>
    <br>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Divisi</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_object($query)) :?>
    <tr>
      <th><?= $num++?></th>
      <td ><?=$row->name ?></td>
      <td><?=$row->class ?></td>
      <td ><?=$row->divisi ?></td>
      <td>
      <a class="btn btn-primary btn-sm" href="Anggota.php" role="button">@detail</a>
      </td>
      
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php  
require_once "includes/Footer.php";
?>