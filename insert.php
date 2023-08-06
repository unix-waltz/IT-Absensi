<?php 
require_once "includes/Header.php";
require_once "Model/Model.php";
if(isset($_POST['tambah'])){
if(input($_POST) == true){
  $alert = "Data Berhasil Ditambah";
}else{
  $alert = "Gagal Ditambah";
}
}
?>

<br><br><br><br>
<h3 align="center">Tambah Anggota</h3><br><br><br>
<div class="container" ">
  <div class="container">
    <div class="container">
      <?php if(isset($_POST['tambah'])){
        echo "<h6 align='center'>".$alert."</h6>";
      } ?>
      <div class="container">
      <form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama</label>
      <input type="text" class="form-control" name="nama" id="inputEmail4" placeholder="Nmaa" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Kelas</label>
      <input type="text" class="form-control" name="kelas" id="inputPassword4" placeholder="kalas" required>
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Divisi</label>
    <input type="text" class="form-control" name="divisi" id="inputAddress" placeholder="cnth: kaum street" required>
  </div>
  <br> <button type="submit" name="tambah" class="btn btn-primary btn-sm">tambah</button>
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