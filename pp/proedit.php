<?php

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$id = $_POST['id'];

$database = new PDO('mysql:host=localhost;dbname=hospital', 'root', '');
$query = $database->query("UPDATE `user` SET `username` = '$username', `password` = '$password' WHERE `id`= '$id'");

if($query){
    header("Location:index.php");
}