<?php

	require_once("../dbconfig.php");

	extract($_POST);

	$sql = "UPDATE products SET pname='$pname', pcode='$pcode', pprice='$pprice', pquantity='$pquantity' WHERE id='$id'";

	$db->query($sql);

	if($db->affected_rows>0){
		//header("Location: ../products.php");
		 $upd = $id . " No Id Successfully Updated";
		 header("Location: ../products.php?upd=$upd&ins=");
	}else{
		echo "Not Updated";
	}


?>