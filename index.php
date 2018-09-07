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
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<?php include 'includes/links.php'; include 'includes/tools.php'; ?>
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<section class="sec">
		<div class="container">
			<div class="row">
				<div class="col-md-3" id="sidebar">
					<?php include 'includes/head.php'; ?>
					<button style="margin-left: 10px; height:45px; margin-bottom: 10px; background-color: #d12; color: #fff; width: 250px;" class="btn slogout grow" onclick="window.location.href='includes/userlogout.php'">
						<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout
					</button>
				</div>
				<div id="aside" class="col-md-9">
					<div class="row">
					<?php
						include 'php/home.php';
						while($row = @mysqli_fetch_array($sql, MYSQLI_ASSOC)){
							echo "<div id=\"div1\" class=\"col-md-12\">";
							
							echo "<h1 class=\"text-danger\">{$row['lec_name']}</h1>";
							echo "<p class=\"lead\">{$row['discription']}</p>";
							
							echo "<button type=\"button\" name=\"download\" ";
							echo "onclick=\"window.location.href='includes/download.php?down={$row['location']}'\"";
							echo "class=\"btn grow btn-danger\">";
							echo "Download <span class=\"glyphicon glyphicon-cloud-download\" aria-hidden=\"true\"></span>";
							echo "</button>";
							
							echo "</div>";
						}
					?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	<?php include 'includes/footer.php'; ?>
	<!-- jQuery -->
	<script src="/CHISystem/js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="/CHISystem/js/bootstrap.min.js"></script>
</body>
</html>