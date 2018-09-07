<?php 
	include './models/database.php';
	$obj = new Database('./models/info.php');
	$conn = $obj->Connect();
	$query = "SELECT * FROM `home`";
	$sql = @mysqli_query($conn, $query);

	if(!$sql) echo "Error : Try Again";

?>