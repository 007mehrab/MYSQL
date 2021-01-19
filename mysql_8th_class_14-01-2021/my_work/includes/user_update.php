<?php

	require_once("../dbconfig.php");

	if($fullname=='' || $email=='' || $password==''){

	extract($_POST);

	$sql = "UPDATE users SET fullname='$fullname', email='$email', password='$password' WHERE id='$id'";

	$db->query($sql);

	if($db->affected_rows>0){
		$upd = "Successfully Updated";
		header("Location: ../users.php?upd=$upd");
	}else{
		echo "Not Updated";
	}

}


?>