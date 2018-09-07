<h1>Home Page</h1>
<?php 
	if(isset($_POST['submit']) && $_POST['submit'] == "Save")
	{	
		$homepagedata['lec_name'] = $_POST['lec_name'];
		$homepagedata['discription'] = $_POST['discription'];

		$myfile   = $_FILES['myfile']['name'];
		$tmp_name = $_FILES['myfile']['tmp_name'];
		$file_extension = @strtolower(end(explode('.', $myfile)));
		$file_size = $_FILES['myfile']['size'];
		
		$allowed = array('doc', 'docx', 'pdf', 'txt', 'jpg', 'png', 'jpeg');
		
		try
		{
			$errors = array();

			if(in_array($file_extension, $allowed) === FALSE){
				$errors[] = "Extension is not allowed!";
			}
			
			if(empty($errors))
			{
				$ran = rand(0, 99);
				$location = "./uploads/".$ran."$myfile";
				$homepagedata['location'] = $location;
				$muf = move_uploaded_file($tmp_name, $location);
				if($muf)
				{
					echo "<h3>File uploaded</h3>";
					
					include '../models/general.php';
					include '../models/insert.php';
					
					$object = new InsertInto($homepagedata, "home");
					
					if($object == TRUE) echo "<h3>Done Operation</h3>";
				
				}else{
					echo "File not uploaded";
				}
			}else{
				foreach ($errors as $error) {
					echo "<h3>".$error."</h3></br>";
				}
			}
		}catch (Exception $e){
			echo $e->getMessage();
		}
	}else include 'homepage.php';
?>