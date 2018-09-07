<?php
	if($_POST){
		if(isset($_POST['submit']) && $_POST['submit'] == "login"){
			$adminname = $_POST['adminname'];
			$adminpass = $_POST['adminpass'];
			try{
				include '../php/login.php';
				$login_model = new AdminLogin($adminname, $adminpass);
				if($login_model == TRUE){
					session_start();
					$_SESSION['adminname'] = $adminname;
					header('Location: http://localhost/CHISystem/admin');
				}
			}catch (Exception $e){
				echo $e->getMessage();
			}
		}
	}else include '../views/login.htm';
?>