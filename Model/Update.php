<?php
require_once 'db.php'; 
function Update($id,$status) {
    global $conn;
    $query = "SELECT * FROM data_tbl WHERE id = $id";
    $result = mysqli_query($conn, $query);
if($status == "Izin") {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $izinValue = intval($row['izin']) + 1;

        $query = "UPDATE data_tbl SET izin = $izinValue WHERE id = " . $row['id'];
        mysqli_query($conn, $query);
    } 
} else if ($status == "Hadir") {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $izinValue = intval($row['hadir']) + 1;

        $query = "UPDATE data_tbl SET hadir = $izinValue WHERE id = " . $row['id'];
        mysqli_query($conn, $query);
    }
}else if($status == "Absen") {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $izinValue = intval($row['absen']) + 1;

        $query = "UPDATE data_tbl SET absen = $izinValue WHERE id = " . $row['id'];
        mysqli_query($conn, $query);
    } 
}else if($status == "SP") {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $izinValue = intval($row['sp']) + 1;

        $query = "UPDATE data_tbl SET sp = $izinValue WHERE id = " . $row['id'];
        mysqli_query($conn, $query);
    } 
}
    
}
