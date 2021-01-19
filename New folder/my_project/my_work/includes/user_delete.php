<?php

	// echo "This is Delete Page";
	
	// echo $_GET['pid'];


	require_once('../dbconfig.php');
	$id = $_GET['pid'];

	$sql = "DELETE FROM users WHERE id = '$id'";
	$db->query($sql);

	header("Location: ../users.php?upd=");


?>