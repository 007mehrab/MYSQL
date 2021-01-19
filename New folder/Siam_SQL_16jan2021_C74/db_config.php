<?php

	ini_set("display_errors", 0);

	define("HOST", "localhost");
	define("USER", "root");			// define("USER", "yyy");
	define("PASS", "");
	define("DB", "13pwad46_phpcrud");

	// Connection with mysql server
	// Database selection

	$db = new mysqli(HOST, USER, PASS, DB);

	// echo $db->connect_errno;
	// echo $db->connect_error;

	// Check connection
	if ($db->connect_errno) {
		echo "Failed to connect to MySQL: ".$db->connect_error;
		exit();
	}

	//echo "After Connection";


	// exit = eta thakle ar por ar kono code kaj krbe nah...akebare ber hoye ashbe

?>