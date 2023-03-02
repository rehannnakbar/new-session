<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengaduan Masyarakat | Nama Peserta </title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #ff884d">
  <div class="container">
    <a class="navbar-brand" href="index.php">Aplikasi Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

<?php
session_start();
if (empty($_SESSION['login']=='masyarakat')) {
    header("location:../index.php");
}
include '../layout/header.php';

if (isset($_GET['page'])){
$page= $_GET['page'];

switch ($page){
    case 'tanggapan';
        include 'tanggapan.php';
        break;
        default;
        echo "Halaman Tidak Tersedia";
        break;
}
}else {
    include 'home.php';
}

include '../layout/header.php';

?>