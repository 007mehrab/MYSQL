<?php
	
	session_start();

	if(!isset($_SESSION['email'])){
		header("Location: login.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assests/css/bootstrap.min.css">
  <script src="assests/js/jquery.min.js"></script>
  <script src="assests/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assests/css/style.css">
</head>