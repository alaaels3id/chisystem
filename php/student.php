<?php 

	include '../models/database.php';
	$object = new Database("../models/info.php");
	$conn = $object->Connect();
	$query = "SELECT * FROM `students`";
	$sql = @mysqli_query($conn, $query);
	
	if(!$sql) echo "!Try Again";
?>