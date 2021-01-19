<?php

	//echo "I quite";

	require_once('../db_config.php');

	$uid = $_GET['uid'];

	$sql = "DELETE FROM users WHERE id='$uid'";

	$db->query($sql);

	$del = $uid.' no id is deleted';
	header("Location: ../users.php?del=$del&upd=");

?>