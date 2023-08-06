<?php 
require_once "includes/Header.php";
require_once "Model/db.php";
if(!isset($_GET['showall'])){ $sql = mysqli_query($conn,"SELECT * FROM riwayat ORDER BY id DESC LIMIT 3"); }
else{
$sql = mysqli_query($conn,"SELECT * FROM riwayat ORDER BY id DESC"); 
}
?>

<br><br><br><br><br>
<h2 align="center">Riwayat</h2><br><br>
<div class="container">
<a class="btn btn-primary btn-sm" type="button" href="?showall=showall">Tampilkan Semua</a>
<br><br>
  <?php while($rows = mysqli_fetch_assoc($sql)) : ?>
    
<ul class="list-group">
   &nbsp;  -<?= $rows['waktu']?>
   
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Total Izin Hari Ini
    <span style="display: inline-block; padding: 0.3em 0.5em; font-size: 0.8em; font-weight: bold; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 100rem; background-color: #007bff; color: #fff;">
    <?php
    $x = explode(",",$rows['izin']);
    $x = count($x);
    if($x > 2){
      echo $x; 
    }else{
      echo $x-1;
    }
    ?>
</span></li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    
  Total Absen Hari Ini

    <span style="display: inline-block; padding: 0.3em 0.5em; font-size: 0.8em; font-weight: bold; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 100rem; background-color: #007bff; color: #fff;">
    <?php
    $absen = explode(",",$rows['absen']);
    $absen = count($absen);
    if($absen > 2){
      echo $absen; 
    }else{
      echo $absen-1;
    };?>
</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Total hadir Hari Ini

 
<span style="display: inline-block; padding: 0.3em 0.5em; font-size: 0.8em; font-weight: bold; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 100rem; background-color: #007bff; color: #fff;">
<?php
    $hadir = explode(",",$rows['hadir']);
    $hadir = count($hadir);
    if($hadir > 2){
      echo $hadir; 
    }else{
      echo $hadir-1;
    } ?>
</span>

  </li>
  <span style="display: inline-block; padding: 0.3em 0.5em; font-size: 0.8em; font-weight: bold; text-align: left; white-space: nowrap; vertical-align: baseline;" class="list-group">
  <form action="" method="get">
  <a class="btn  btn-sm" href="detail.php?del=<?= $rows['id'] ?>" role="button">( &nbsp;🗿&nbsp; Detail &nbsp;) </a>
  <a class="btn  btn-sm" href="ubah.php?mv=<?= $rows['id'] ?>" role="button">( &nbsp;⛔&nbsp; Hapus &nbsp;) </a>
  </form>
</span>
</ul>
<br>
<?php endwhile; ?>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php  
require_once "includes/Footer.php";
?>