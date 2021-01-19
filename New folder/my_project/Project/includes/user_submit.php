<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){



	extract($_POST); //extract dile sob input field name variable hoye jabe tader aage '$' use korlei

	// echo $sku . "<br/>";
	// echo $name . "<br/>";
	// echo $price . "<br/>";

	require_once('../dbconfig.php');

	// echo "INSERT INTO products (sku, name, price) VALUES ('$sku', '$name', '$price')";

	if($fullname=='' || $email=='' || $password==''){
		

		// echo "<script> alert ('All Fields must be Fillup')</script>";
		$msg = "All Fields must be Fillup";
		header("Location:../users_new.php?msg=$msg");

	}


	else{
		$sql = "INSERT INTO users (fullname, email, password)
		 VALUES ('$fullname','$email','$password')";

		$db->query($sql);

	if($db->affected_rows>0){
		header("location: ../users.php");

			}

		}

	// $sql = "INSERT INTO products (sku, name, price) VALUES ('$sku', '$name', '$price')";

	// $db->query($sql);

	// if($db->affected_rows>0){
	// 	header("location: ../products.php");
	}



?>