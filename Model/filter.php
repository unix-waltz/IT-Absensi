<?php 
require_once "db.php";
function Filter($data){
return strtoupper(htmlspecialchars($data));
}
function getNamaById($ids)
{
    global $conn;
    $names = array();
    $queryResult = mysqli_query($conn , "SELECT * FROM data_tbl");
    while ($row = mysqli_fetch_object($queryResult)) {
        if (in_array($row->id, $ids)) {
            $names[] = $row->name;
        }
    }

    return $names;
}

function del($id){
    global $conn;
$sql = "DELETE FROM data_tbl WHERE id = $id";
if (mysqli_query($conn , $sql)){
return true;
}
}
function delx($id){
    global $conn;
$sql = "DELETE FROM riwayat WHERE id = $id";
if (mysqli_query($conn , $sql)){
return true;
}
}
?>