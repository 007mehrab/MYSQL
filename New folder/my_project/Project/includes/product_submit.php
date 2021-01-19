<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){


	extract($_POST);

	require_once('../dbconfig.php');


	if($pname=='' || $pcode=='' || $pprice==''||$pquantity==''){
		
		$msg="All Fields Must be Fillup";
		header("Location:../insert.php?msg=$msg");
		// $msg = "All Fields must be Fillup";
		// header("Location:../insert.php?msg=$msg");

	}


	else{
		$sql = "INSERT INTO products (pname, pcode, pprice, pquantity)
		 VALUES ('$pname','$pcode','$pprice','$pquantity')";

		$db->query($sql);

	if($db->affected_rows>0){

		$ins="Successfully Inserted";
		header("location: ../products.php?ins=$ins&upd=");

		//$ins ="Successfully Inserted";
		//header("location: ../products.php?ins=$ins&upd=");

			}

		}

	}



?>