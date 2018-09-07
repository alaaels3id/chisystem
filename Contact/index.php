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
	<title>Contact Us</title>
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
						<div id="div2" class="col-md-12">
							<h1 class="text-info">Contact With Us if you have a Problem</h1>
							<form method="post" action="?">
								<div class="form-group">
							    	<input type="text" name="username" class="form-control" placeholder="Enter Your Name">
							  	</div>
							  	<div class="form-group">
							    	<textarea style="width: 500px; font-size: 15px; height: 100px;" class="form-control" placeholder="Enter Your Feedback" name="message"></textarea>
							  	</div>
							  	<input type="submit" name="submit" class="btn btn-info" value="Send">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	<?php include '../includes/footer.php'; ?>
	<!-- jQuery -->
	<script src="../js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>