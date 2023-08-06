<?php 
require_once "includes/Header.php";
require_once "Model/db.php";
require_once "Model/Update.php";
require_once "Model/filter.php";
$namesString = '';

$alrt = "<div class='alert alert-danger' role='alert'>
Maaf, Terjadi Kesalahan!
</div>";
$dates = date('Y-m-d');
if (isset($_POST['confirm'])) {
  if(isset($_POST['kehadiran'])){
  $kehadiran = $_POST['kehadiran'];
  $hadir = array();
        $izin = array();
        $absen = array();
$SP =[];
        foreach ($kehadiran as $id => $status) {
            if ($status === 'Hadir') {
                $hadir[] = $id;
            } elseif ($status === 'Izin') {
                $izin[] = $id;
            } elseif ($status === 'Absen') {
                $absen[] = $id;
            }
            elseif ($status === 'SP') {
              $SP[] = $id;
          }
            Update($id, $status);
        }

        $reshadir = getNamaById($hadir);
        $reshadir = implode(',', $reshadir);
        $resizin = getNamaById($izin);
        $resizin = implode(',', $resizin);
        $resabsen = getNamaById($absen);
        $resabsen = implode(',', $resabsen);
        
        $SP = getNamaById($SP);
        $SP = implode(',', $SP);


        
          $sql = mysqli_query($conn,"INSERT INTO riwayat(absen,izin,hadir,waktu) value('$resabsen','$resizin','$reshadir','$dates')");
          if($sql){
$alrt = "<div class='alert alert-success' role='alert'>
Konfirmasi Sukses Disimpan!
</div>";
          }
        
    }

}


$num = 1;
$query = mysqli_query($conn , "SELECT * FROM data_tbl");
?>
<br><br>
<br><br>
<div class="container">
    <h2 align="center">Anggota</h2>
  <br>
  <?php 
  if(isset($_POST['confirm'])){
    echo "<br><h5 align='center'>". $alrt."</h5><br>";
  }
  ?>
  <h5><?=  $dates; ?></h5>
    <br>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Divisi</th>
      <th scope="col">#Kas</th>


    </tr>
  </thead>
  <tbody> 
<form action="" method="post">
    <?php while ($row = mysqli_fetch_object($query)) : ?>
        <tr>
        <th><?= $num++?></th>
      <td ><?=$row->name ?></td>
      <td><?=$row->class ?></td>
      <td ><?=$row->divisi ?></td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kehadiran[<?= $row->id ?>]" id="inlineRadio1_<?= $row->id ?>" value="Hadir" <?= ($row->absen === 'Hadir') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="inlineRadio1_<?= $row->id ?>">Hadir</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kehadiran[<?= $row->id ?>]" id="inlineRadio2_<?= $row->id ?>" value="Izin" <?= ($row->absen === 'Izin') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="inlineRadio2_<?= $row->id ?>">Izin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kehadiran[<?= $row->id ?>]" id="inlineRadio3_<?= $row->id ?>" value="Absen" <?= ($row->absen === 'Absen') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="inlineRadio3_<?= $row->id ?>">Absen</label>
                </div>
            </td>
          
        </tr>
    <?php endwhile; ?>
</tbody>
</table>
<br><br>
<h6>Apakah Anda Yakin?</h6>
<button class="btn btn-primary btn-sm" name="confirm" role="button">Konfirmasi</button>
</form>

<!-- ... bagian kode yang sudah ada sebelumnya ... -->

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php  
  
require_once "includes/Footer.php";
?>