<?php
$DSN='mysql:host = localhost';
$ConnectingDB = new PDO($DSN,'hama','root');//mysqli_connect('localhost', 'hama', 'root', 'new');

	$dbhost = 'localhost';
	$dbuser = 'hama';
	$dbpass = 'root';
	$dbname = 'library'; 

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname,3307);

	// Checking the connection
	// if (mysqli_connect_errno()) {
	// 	die('Database connection failed ' . mysqli_connect_error());
	// }else {
	// 	echo 'connect';
	// }

?>