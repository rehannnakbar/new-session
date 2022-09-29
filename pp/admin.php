<?php
session_start();
if(isset($_SESSION['username'])){
    echo "<h1> Halaman Admin </h1>";
    echo "Welcome, ";
    echo $_SESSION["username"];
    echo "<br />";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>. Admin .</title>
</head>
<body>
<div>
 <a href="berandaa.php" class="btn btn-secondary">
  Beranda
</a>

<a href="index.php" class="btn btn-info">
   Data
   </a>
<a href="form.php">
 <button class="btn btn-danger" onclick="alert('anda telah logout')">Logout</button>
</a>
</div>
</body>
</html>