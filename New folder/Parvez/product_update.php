<?php



	require_once('db_config.php');

	 extract($_POST);

	$sql = "UPDATE products 
	 	SET pname='$pname', pcode='$pcode',pprice='$pprice',pquantity='$pquantity'

      	WHERE id=$id";

      	// $db->query($sql);

	 	if($db->query($sql)){
	 		$msg = "Successfully Updated";
	 		header("location: products.php?msg=$msg");
	 	} else{
	 		echo "Something Error";
	 	}








?>