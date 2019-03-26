<?php 
	
	# isama yung connection para makapag connect at insert sa database
	include("connection.php");

	# kunin ang mga value
	# $$variablename = id ng gusto mong i delete
	$id = $_GET['id'];

	# nakaparameters yung i dedelete
	$query = "DELETE FROM tbl_sample WHERE id = $id";
	$stmt = $dsn->prepare($query);
	# pag set ng parameters
	$stmt->execute(array($id));

	# para bumalik dun sa umpisa
	header("location: ../index.php");