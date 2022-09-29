<?php

$id = $_GET['id'];

$db = new PDO('mysql:host=localhost;dbname=hospital','root','');
$query = $db->query("DELETE FROM `user` WHERE id='$id'");

if($query){
    header("Location:index.php");
 }