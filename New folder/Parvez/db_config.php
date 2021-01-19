<?php

	ini_set("display_errors", 0);

	define("HOST","localhost");
	define("USER","root");
	define("PASS","");
	define("DB","pwad_46"); 

	// Connection with mysql server

	

     $db = new mysqli(HOST,USER,PASS,DB);


     //Check connection

     if ($db -> connect_errno){
     	echo "Failed to connet to MySql : "  .$db-> connect_error;
     	exit(); 
     }