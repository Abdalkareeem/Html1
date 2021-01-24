<?php
include("config.php");
    $e=$_GET['name'];
	$sql="DELETE FROM users WHERE name=$e";
	$stmt=$pdo->prepare($sql);
	
	header('Location:CRUD.php');


?>