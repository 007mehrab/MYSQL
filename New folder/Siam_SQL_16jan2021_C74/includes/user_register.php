<?php

	//echo "I am siam";

	if($_SERVER['REQUEST_METHOD']=='POST'){

		require_once('../db_config.php');

		extract($_POST);
		$pass_en = md5($pass);		//encrypted password
		//$pass_en = sha1($pass);		//encrypted password


		if($name==''||$email==''||$pass_en==''){
			$msg = "Please fill up every field";
			header("Location: ../users_new.php?msg=$msg");
		}
		else{

			// Check existing user
			$data = $db->query("SELECT email FROM users WHERE email = '$email'");

			//print_r($data);

			if($data->num_rows==0){

				$sql = "INSERT INTO users (fullname, email, password) VALUES ('$name', '$email', '$pass_en')";

				$db->query($sql);

				if($db->affected_rows > 0){
					header("Location: ../users.php?del=&upd=");
				}

			}
			else{
				echo "$email address is already exist. Please try different one.";
			}
			
		}
	
	}

	// echo "INSERT INTO users (fullname, email, password) VALUES ('$name', '$email', '$pass')";

?>