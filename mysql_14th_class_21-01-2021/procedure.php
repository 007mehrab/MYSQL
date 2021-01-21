<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<title>Insert</title>

	<style>
		form {
			background-color: lightgray;
			width: 200px;
			padding: 10px;
		}
		p.right {
			color: green;
		}
		p.wrong {
			color: red;
		}
	</style>
</head>
<body>
	<center>

		<h2 class='animate__animated animate__zoomIn'>Product Inserted</h2><br>

	<form action="" method="post">


		ID :<br><input type="number" name="id" required="required"><br><br>
		NAME :<br><input type="text" name="name" required="required"><br><br>
		Product Details :<br><input type="text" name="product_details"><br><br>
		Product Price :<br><input type="text" name="product_price" required="required"><br><br>

		<input type="submit" value="SUBMIT">

	</form>


		<?

	$db = new mysqli("localhost", "root", "", "mycompany");

	if ($_SERVER['REQUEST_METHOD']=='POST') {
		extract($_POST);

		$sql = "CALL data_insert('$id', '$name', '$product_details', '$product_price')";

		$db->query($sql);

		if($db->affected_rows>0){

			echo "<h2 class='animate__animated animate__fadeInDown'><p class='right'>Successfully Inserted</p></h2>";

		}else{
			echo "<h2 class='animate__animated animate__fadeInDown'><p class='wrong'>Failed</p></h2>";
		}
		
	}

	?>

	</center>

</body>
</html>