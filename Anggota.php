<?php 
require_once "includes/Header.php";
require_once "Model/db.php";
$num = 1;
$query = mysqli_query($conn , "SELECT * FROM data_tbl");
?>
<br><br>
<br><br>
<div class="container">
    <h2 align="center">Anggota</h2>
    <br>
    <a class="btn btn-primary btn-sm" href="insert.php" role="button">+ Input</a>
    <br><br>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Divisi</th>
      <th scope="col">#detail</th>
      <th scope="col">@</th>

    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_object($query)) :?>
    <tr>
      <th><?= $num++?></th>
      <td ><?=$row->name ?></td>
      <td><?=$row->class ?></td>
      <td ><?=$row->divisi ?></td>
      <td>@twitter</td>
      <td>
      <a class="btn btn-primary btn-sm" href="hapus.php?id=<?= $row->id ?>" role="button">@ubah</a>
      <a class="btn btn-danger btn-sm" href="ubah.php?id=<?= $row->id ?>" role="button">@hapus</a>
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