<?php 
require_once "filter.php";
require_once "db.php";
function input($data){
    global $conn;
$nama = Filter($data['nama']);
$divisi = Filter($data['divisi']);
$kelas = Filter($data['kelas']);

$query = mysqli_query($conn,"SELECT * FROM data_tbl WHERE name = '$nama'");
if(mysqli_num_rows($query) > 0){
return false;

}else{
    $sql = mysqli_query($conn,"insert into data_tbl(name,divisi,class) values('$nama','$divisi','$kelas')");
    if($sql){
return true;
    }
}
}
?>