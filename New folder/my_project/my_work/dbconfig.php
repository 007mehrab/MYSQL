<?php

	ini_set("display_errors",0);

	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("DB", "pwad46");

	//Connection with mysql server

	// Database Selection

	$db = new mysqli(HOST, USER, PASS, DB);

	// Check Connection

	if ($db->connect_errno){ //errno = error number builtIn
		echo "Faild to connect to MySQL :" . $db->connect_error;
		exit();
	}

	// echo "After Connection";


?>