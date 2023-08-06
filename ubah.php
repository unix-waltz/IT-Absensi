<?php 
if(isset($_GET['id'])){
    $id = $_GET['id']; 
    require_once "Model/filter.php";
    if(del($id) != false){
header("Location:Anggota.php");
    }
}
if(isset($_GET['mv'])){
    $id = $_GET['mv']; 
    require_once "Model/filter.php";
    if(delx($id) != false){
header("Location:riwayat.php?showall=showall");
    }
}