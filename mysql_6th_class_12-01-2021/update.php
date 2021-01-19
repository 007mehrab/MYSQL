<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>


</head>
<body>
	<?php require_once('connection1.php'); ?>

	<h1 align="center">Data Update</h1><br>

	<?php

	$sql = "SELECT*
	FROM products";

	$data = $db->query($sql);
	//print_r($data);

	$row = $data->fetch_assoc()
	?>


	<center>
		<form action="" method="post">
			
			Product Name <br>
			<input type="text" name="pname" value="<? echo $row["pname"] ?>" ><br><br>
			Product Code <br>
			<input type="text" name="pcode" value="<? echo $row["pcode"] ?>"><br><br>
			Product Price <br>
			<input type="text" name="pprice" value="<? echo $row["pprice"] ?>"><br><br>
			Product Quantity <br>
			<input type="text" name="pquantity" value="<? echo $row["pquantity"] ?>"><br><br>

			<input type="submit" name="submit" class="btn btn-success" value="UPDATE">

		</form><br>

		<a href="data_selection.php" class="btn btn-info">Go back to the list</a><br><br>


	<?

	if ($_SERVER['REQUEST_METHOD']=='POST') {

		$id = $_GET['id'];
		$name = $_POST['pname'];
		$code = $_POST['pcode'];
		$price = $_POST['pprice'];
		$quantity = $_POST['pquantity'];

		require_once('connection1.php');

		$sql = "UPDATE products
		SET pname='$name', pcode='$code', pprice='$price', pquantity='$quantity'
        WHERE id='$id'";

		$db->query($sql);

		if($db->affected_rows>0){
			header("location: data_selection.php");
		}
		else{
			echo "Something Errors";
		}

		//print_r($_POST);
	}

	?>

</center>

</body>
</html>