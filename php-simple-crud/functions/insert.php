<?php
	# isama yung connection para makapag connect at insert sa database
	include("connection.php");

	# kunin ang mga value
	# $variablename = $_(yung method sa form)['(yung name ng input)']
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];

	# nakaparameters yung mga iiinsert
	$query = "INSERT INTO tbl_sample (column1,column2) VALUES (?,?)";
	$stmt = $dsn->prepare($query);
	# pag set ng parameters
	$stmt->execute(array($fname,$lname));

	# para bumalik dun sa umpisa
	header("location: ../index.php");

?>