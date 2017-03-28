<?php

	define('DBNAME', 'pleroma');
	define('DBUSER', 'root');
	define('DBPASS', 'root');
	
	$pdo=new PDO ("mysql:host=localhost;dbname=".DBNAME,DBUSER,DBPASS);
	#$pdo=new PDO ("mysql:host=localhost;dbname=pleroma","root","root");

?>
