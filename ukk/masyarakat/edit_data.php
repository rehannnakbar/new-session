<?php
include '../config/koneksi.php';

$id_pengaduan = $_GET['id_pengaduan'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat", 'root', '');
$query = $koneksi->query("UPDATE pengaduan SET id_pengaduan='$id_pengaduan'");

if($query){
    header("location:masyarakat/index.php");
}
?>