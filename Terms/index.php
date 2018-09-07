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
	<title>Terms</title>
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
							<h1 class="text-danger">Terms & Conditions</h1>
							<p class="lead" style="font-size: 30px;">
								However, You enter this website.you accept our all terms
								and conditions.
							</p>
							<ol>
								<li>this website is stablished for CHI Students only.</li>
								<li>this contain is suitable for students only.</li>
								<li>and it is forbidden to any one to use it.</li>
								<li>the student use this site for study only not for anything else.</li>
								<li>the mangers of this site is not responsable for any fake information that published on it</li>
							</ol>
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