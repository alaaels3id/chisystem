<h1>Upload Page</h1>
<?php 
	if(isset($_POST['submit']) && $_POST['submit'] == "Save"){
		$exampagedata['exam_date_start'] = $_POST['exam_date_start'];
		$exampagedata['exam_date_end'] = $_POST['exam_date_end'];
		$exampagedata['exam_type'] = $_POST['exam_type'];
		$exampagedata['exam_num'] = $_POST['exam_num'];
		try {
			include '../models/general.php';
			include '../models/insert.php';
			$object = new InsertInto($exampagedata, 'exams');
			if($object == TRUE) echo "Done Operation";
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}else include 'exam.php';
?>