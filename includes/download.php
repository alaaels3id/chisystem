<?php
	include '../models/database.php';
	$obj = new Database('../models/info.php');
	$conn = $obj->Connect();
	if(isset($_GET['down'])){
		$path = $_GET['down'];

		$result = mysqli_query($conn, "SELECT * FROM `home` WHERE `location` = $path");
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.basename($path).'"');
		header('Content-Length: '.filesize($path));
		readfile($path);
	}
?>