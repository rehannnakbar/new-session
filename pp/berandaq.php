<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <title>. Beranda .</title>
</head>
<body>
   <h2 style="padding-bottom: 15px;padding-top: 40px;padding-left: 50px;">Beranda</h2>
<div class="card" style="width: 15rem;padding-left: 50px;">
  <div class="card-body">

  <?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location:form.php");
}
echo "Username :"; echo $_SESSION['username'];
echo "<br />";
echo "Password :"; echo $_SESSION['password'];
echo "<br />";

 ?>
  </div>
</div>
<div>
   <br>
   <form action="admin.php">
 <button class="btn btn-primary" >Halaman Admin</button>
</form>
<br>
<form action="delete.php">
 <button class="btn btn-danger " onclick="alert('anda telah logout')">Logout</button>
</div>
</form>
</body>
</html>