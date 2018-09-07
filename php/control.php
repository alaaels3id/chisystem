<?php
	if($_POST){
		if(isset($_POST['submit']) && $_POST['submit'] == "login"){
			$username = $_POST['username'];
			$password = $_POST['password'];
			try{
				include '../models/login.php';
				$login_model = new Login($username, $password);
				if($login_model == TRUE){
					session_start();
					$_SESSION['username'] = $username;
					header('Location: http://localhost/CHISystem');
				}
			}catch (Exception $e){
				echo $e->getMessage();
			}
		}
	}else include 'views/slogin.htm';
?>