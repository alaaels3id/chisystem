<?php
	session_start();
	if(!isset($_SESSION['username'])){
		include 'php/control.php';
		die();
	}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<?php include '../includes/links.php';  include '../includes/tools.php'; ?>
</head>
<body>
	<?php include '../includes/header.php';?>
	<section class="sec">
		<div class="container">
			<div class="row">
				<div class="col-md-3" id="sidebar">
					<?php include '../includes/head.php'; ?>
					<button style="margin-left: 10px; height:45px; margin-bottom: 10px; background-color: #d12; color: #fff; width: 250px;" class="btn slogout grow" onclick="window.location.href='../includes/userlogout.php'">
						<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout
					</button>
				</div>
				<div id="aside" class="col-md-9">
					<div class="row">
						<div id="div1" class="col-md-12">
							<?php include '../php/student.php'; ?> 
							<table class="table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Names</th>
										<th>Grades</th>
										<th>Dregrees</th>
									</tr>
								</thead>
								<tbody>
								<?php 
									while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
										echo "<tr>";
										if($row['stu_name'] == $_SESSION['username']){
											echo "<td id=\"hightlight\" class=\"tdata\">".$row['id']."</td>";
											echo "<td id=\"hightlight\" class=\"tdata\">".ucfirst($row['stu_name'])."</td>";
											echo "<td id=\"hightlight\" class=\"tdata\">".$row['stu_grade']."</td>";
											echo "<td id=\"hightlight\" class=\"tdata\">".$row['stu_deg']."</td>";

										}else{
											echo "<td class=\"tdata\">".$row['id']."</td>";
											echo "<td class=\"tdata\">".ucfirst($row['stu_name'])."</td>";
											echo "<td class=\"tdata\">".$row['stu_grade']."</td>";
											echo "<td class=\"tdata\">".$row['stu_deg']."</td>";
										}
										echo "</tr>";
									}
								?>
								</tbody>
							</table>
						</div>
						<div id="div1" class="col-md-12">
							<?php 
								include '../php/exam.php';
								while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
								{
									echo "<p class=\"lead\" style=\"font-size: 30px;\">";
									echo "The Next <span class=\"text-danger\"><b>{$row['exam_type']}</b></span> Examination ";
									echo "Will be in <span class=\"text-danger\"><b>{$row['exam_date_start']}</b></span>";
									echo " and will end in <span class=\"text-danger\"><b>{$row['exam_date_end']}</b></span> ";
									echo " The num of subjects: <span class=\"text-danger\"><b>{$row['exam_num']}</b></span>";
									echo "</p>";
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	<?php include '../includes/footer.php'; ?>
	<!-- jQuery -->
	<script src="/CHISystem/js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="/CHISystem/js/bootstrap.min.js"></script>
</body>
</html>