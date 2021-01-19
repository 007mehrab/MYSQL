<?php

	require_once('../db_config.php');

	extract($_POST);

	$sql = "UPDATE users SET fullname='$name', email='$email', password='$pass' WHERE id='$eid'";

	//$db->query($sql);

	if($db->query($sql)){
		$msg = "$eid no id is Updated";
		header("Location: ../users.php?upd=$msg&del=");
	}



?>