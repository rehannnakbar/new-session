<?php 

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$db = new PDO ('mysql:host=localhost;dbname=dbsekola', 'root', '');
$query = $db->query("insert into user values ('','$username','$password', '$role')");

if($query){
    header("Location:index.php");
}