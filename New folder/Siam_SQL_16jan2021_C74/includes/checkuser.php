<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

		require_once('../db_config.php');

		extract($_POST);

		$password = md5($psw);
		//$password = sha1($psw);

		// echo "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

		$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

		$data = $db->query($sql);
		$row = $data->fetch_assoc();

		//echo $data->num_rows;

		if($data->num_rows>0){

			session_start();

			$_SESSION['fullname'] = $row['fullname'];
			$_SESSION['email'] = $row['email'];

			header("Location: ../index.php");
		}

	}

?>