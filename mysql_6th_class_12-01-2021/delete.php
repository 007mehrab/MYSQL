<?php 
	require_once('connection1.php');

	$id = $_GET['id'];
	$sql = "DELETE FROM products WHERE id=$id";
	
	if($db->query($sql) == TURE){
		header("location: data_selection.php");
	}
	else{
		echo "Something Wrong";
	}
?>