<?php
	session_start();
	if(!isset($_SESSION['adminname'])){
		include '../includes/controller.php'; 
		die();
	}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Profile</title>
	<?php include '../includes/links.php';  include '../includes/tools.php';?>
</head>
<body>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12 admin-information">
					<div id="control-board">
						<ul class="list-inline">
							<li>
								<?php 
									if($_SESSION['adminname'])
										echo "<span>#Welcome_".ucfirst($_SESSION['adminname'])."</span>"; 
								?>
							</li>
							<li>
								<button class="btn-lg btn-danger" onclick="window.location.href='http://localhost/CHISystem/includes/logout.php'">
									<span class="glyphicon glyphicon-logout"></span>Logout
								</button>
							</li>
						</ul>
					</div>
					<div class="sitecontrol">
						<div class="row">
							<div class="col-md-3">
								<aside>
									<nav>
										<a class="btn-danger btn-lg" href="?page=homepage">Home Page</a>
										<a class="btn-danger btn-lg" href="?page=studentpage">Students Page</a>
										<a class="btn-danger btn-lg" href="?page=exam">Exames Page</a>
										<a class="btn-danger btn-lg" href="/CHISystem/">Go to Site</a>
									</nav>
								</aside>
							</div>
							<div id="page" class="col-md-9">
								<?php 
									if(@$_GET['page']){
										$page = "c_".$_GET['page'].".php";
										if(is_file($page)){
											include($page);
										}else{
											echo "Requested File is not Found!";
										}
									}else{
										include 'homepage.php';
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ********************* modals ********************** -->
	<?php include 'admin.php';?>
	
	<!-- jQuery -->
	<script src="/CHISystem/js/jquery.js"></script>
	
	<!-- Bootstrap Core JavaScript -->
	<script src="/CHISystem/js/bootstrap.min.js"></script>
</body>
</html>