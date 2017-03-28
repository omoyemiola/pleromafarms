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

	if(array_key_exists("save",$_POST)) {

		print_r($_FILES);
	}
	

?>

<form id="register" method="POST" enctype="multipart/form-data">

	<p>Please Upload a file</p>
	<input type="file" name="pic">
	<input type="submit" name="save">
	


</form>
