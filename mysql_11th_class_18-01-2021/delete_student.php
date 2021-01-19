<?php

	$db = new mysqli("localhost", "root", "", "pwad46");

	$id = $_GET['id'];

	$sql = "DELETE FROM student_info WHERE id = '$id'";

	$db->query($sql);

	header("Location: show_view.php");


?>	