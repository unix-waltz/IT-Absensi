<?php 
require_once "includes/Header.php";
require_once "Model/Model.php";
require_once "Model/db.php";
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
if(isset($_POST['ubah'])){
$name = $_POST['nama'];
$kelas = $_POST['kelas'];
$divisi = $_POST['divisi'];
$result = mysqli_query($conn,"UPDATE data_tbl SET name = '$name', class = '$kelas', divisi = '$divisi' WHERE id = $id");
if ($result) header("Location:Anggota.php");
}
$sql = mysqli_query($conn,"SELECT * FROM data_tbl WHERE id = $id ");
$row = mysqli_fetch_object($sql);
?>

<br><br><br><br>
<h3 align="center">Ubah Detail</h3><br><br><br>
<div class="container" ">
  <div class="container">
    <div class="container">
      <div class="container">
      <form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama</label>
      <input type="text" class="form-control" name="nama" id="inputEmail4" value="<?= $row->name ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Kelas</label>
      <input type="text" class="form-control" name="kelas" id="inputPassword4" value="<?= $row->class ?>" required>
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Divisi</label>
    <input type="text" class="form-control" name="divisi" id="inputAddress" value="<?= $row->divisi ?>" required>
  </div>
  <br> <button type="submit" name="ubah" class="btn btn-primary btn-sm">Ubah</button>
<a class="btn btn-danger btn-sm" href="Anggota.php" role="button">X batal</a>
 
</form>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php  
require_once "includes/Footer.php";
?>