<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?

	$db = new mysqli("localhost", "root", "", "pwad46");

	if ($_SERVER['REQUEST_METHOD']=='POST') {
		extract($_POST);

		$sql = "CALL data_insert('$name', '$email', '$mobile', '$gender')";

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


		Name :<br><input type="text" name="name"><br><br>
		Email :<br><input type="text" name="email"><br><br>
		Mobile :<br><input type="text" name="mobile"><br><br>
		Gender :
		Male<input type="radio" name="gender" value=" male">
		Female<input type="radio" name="gender" value=" female"><br><br>

		<input type="submit" name="submit" value="SUBMIT">

	</form>

</body>
</html>