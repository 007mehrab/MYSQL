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

	<h1 align="center">Data Entry</h1><br>


	<center>
		<form action="product_insert.php" method="post">

			<input type="text" name="pname" placeholder="Product Name"><br><br>
			<input type="text" name="pcode" placeholder="Product Code"><br><br>
			<input type="text" name="pprice" placeholder="Product Price"><br><br>
			<input type="text" name="pquantity" placeholder="Product Quantity"><br><br>

			<input type="submit" name="submit" value="SUBMIT">

		</form><br>

		<a href="data_selection.php" class="btn btn-info">Go back to the list</a><br><br>



</center>

</body>
</html>