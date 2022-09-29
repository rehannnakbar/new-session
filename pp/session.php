<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = new PDO('mysql:host=localhost;dbname=dbsekola', 'root', '');
$query = $koneksi->query("select * from user where ='$username' AND password='$password'");
$data = $query->fetch();
if($query->rowCount() > 0){
    if($data['role']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = "admin";
        header("Location:admin.php");
    }
    else if($data['role']=="user"){
        echo "halo user";
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = "user";
        header("Location:user.php");
    }
}else{
    header("Location:form.php");
}