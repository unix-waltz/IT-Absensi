<?php require_once "includes/Header.php"; 
require_once "Model/db.php";
$sql = mysqli_query($conn, "SELECT * FROM riwayat ORDER BY id DESC LIMIT 1");
$sql = mysqli_fetch_object($sql);
?>
<br><br><br>
<div class="container">
    <h3> - Dashboard</h3>
</div>
<br>
<div class="container mt-6">
  <div class="row">
  <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-header">
          Riwayat Terakhir&nbsp;(&nbsp;<?= $sql->waktu ?>&nbsp;)
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> Kehadiran : <?php 
           $hadir = explode(",",$sql->hadir);
           $hadir = count($hadir);
           if($hadir >= 2){
             echo $hadir; 
           }else{
             echo $hadir-1;
           } 
          ?></li>
          <li class="list-group-item">
            Jumlah Anggota Yg Izin : <?php 
           $izin = explode(",",$sql->izin);
           $izin = count($izin);
           if($izin >= 2){
             echo $izin; 
           }else{
             echo $izin-1;
           } 
          ?></li>
          <li class="list-group-item">Tanpa Keterangan : <?php 
           $absen = explode(",",$sql->absen);
           $absen = count($absen);
           if($absen >= 2){
             echo $absen; 
           }else{
             echo $absen-1;
           } 
          ?></li>
        </ul>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">#Detail</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Konten di bagian bawah -->
  <div class="row mt-4">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Anggota</h5>
          <p class="card-text">DAri perhitungan,Total seluruh Angota IT-Club yg tercatat,kurang lebih ada <?php 
          $query = mysqli_query($conn, "SELECT name FROM data_tbl");
          $row = mysqli_num_rows($query);
          echo "<b>".$row."</b> Anggota";
          ?></p>
          <a href="Anggota.php" class="btn btn-primary">#Detail</a>
        </div>
      </div>
    </div>
  
    
  </div><br>
  <div class="container">
    <div class="container">
        <hr>
    </div>
  </div>
</div><br>
<div class="container">
    <h2 align="center">Susunan Pengurus</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div><br>
<div class="container">
    <h2 align="center">Anggota</h2>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<?php require_once "includes/Footer.php"; ?>
