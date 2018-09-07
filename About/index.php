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
	<title>About</title>
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
							<h1 class="text-danger">About Us</h1>
							<p class="lead" style="font-size: 30px;">
								We are a Group of students Designed this website to help our frinds make study easy than before
								by uploading the files and publish the information about the collage and the time for examination for all 
								the subjects in 4th year CS. 
							</p>
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