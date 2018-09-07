<?php 
	$query = "SELECT * FROM `exams`";
	$sql = @mysqli_query($conn, $query);

	if(!$sql) echo "Error : Try Again";

?>