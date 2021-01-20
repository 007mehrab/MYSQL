<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>

	<?

	$db = new mysqli("localhost", "root", "", "students");

	if ($_SERVER['REQUEST_METHOD']=='POST') {
		extract($_POST);

		$sql = "CALL data_insert('$id', '$name', '$address', '$contact_no')";

		$db->query($sql);

		if($db->affected_rows>0){

			echo "Successfully Inserted";

		}else{
			echo "Failed";
		}
		
	}

	?>

	<br><br>


	<form action="" method="post">


		ID :<br><input type="text" name="id"><br><br>
		NAME :<br><input type="text" name="name"><br><br>
		ADDRESS :<br><input type="text" name="address"><br><br>
		CONTACT NO :<br><input type="text" name="contact_no"><br><br>

		<input type="submit" name="submit" value="SUBMIT">

	</form>
	</center>

</body>
</html>