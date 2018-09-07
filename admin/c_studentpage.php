<h1>Student Page</h1>
<?php 
	if(isset($_POST['submit']) && $_POST['submit'] == "Save"){
		$stupagedata['stu_name'] = $_POST['stu_name'];
		$stupagedata['stu_grade'] = $_POST['stu_grade'];
		$stupagedata['stu_deg'] = $_POST['stu_deg'];
		try {
			include '../models/general.php';
			include '../models/insert.php';
			$object = new InsertInto($stupagedata, 'students');
			if($object == TRUE) echo "Done Operation";
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}else include 'studentpage.php';
?>