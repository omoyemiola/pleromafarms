<?php
/*
	define('DBNAME', 'pleroma');
	define('DBUSER', 'root');
	define('DBPASS', 'root');	
	
	
try{
	#prepare a pdo instance

	$pdo = new PDO ("mysql:host=localhost;dbname=".DBNAME,DBUSER,DBPASS);


	#set verbose error modes
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

} catch(PDOException $e){

	echo $e->getMessage();
}*/
	#max file size...
	define("MAX_FILE_SIZE", "2097152");
	
	if(array_key_exists("save",$_POST)) {

		$errors= [];

	

		#be sure a file was selected ...
		if(empty($_FILES['pic']['name'])){

			$errors[] = "please choose a file";
		}

		#check file size...

		if($_FILES['pic']['size'] > MAX_FILE_SIZE){

			$errors[] = "file size exceeds maximum.maximum: ".MAX_FILE_SIZE; 
		}

		if(empty($errors)){

			echo "done";
		} else {

			foreach ($errors as $err) {
				echo $err. '</br>';
			}
		}
		//print_r($_FILES);
	}

	

?>

<form id="register" method="POST" enctype="multipart/form-data">

	<p>Please Upload a file</p>
	<input type="file" name="pic">
	<input type="submit" name="save">
	


</form>
