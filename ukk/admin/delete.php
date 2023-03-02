<?php 
include "../config/koneksi.php";

$id_pengaduan = $_GET['id_pengaduan'];
$query =$koneksi->query("DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");

if($query){
    header("location:index.php");
}
?>
