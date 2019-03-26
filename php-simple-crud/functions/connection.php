<?php
	$server = "localhost";
	$username = "root";
	$password = "root";
	$database = "db_sample";// pangalan ng database

	try {
		$dsn = new PDO("mysql:host=".$server.";dbname=".$database,$username,$password);
		$dsn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		echo "Connection success!";
	} catch (Exception $e) {
		echo "Connection error! " . $e->getMessage();
	}
?>