<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VIEW</title>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body>


	<div class="container">

		<h2 align="center">All Records Details</h2> <br>


	<?php

	$db = new mysqli("localhost", "root", "", "company");

		$sql = "SELECT * FROM details_view";

		$data = $db->query($sql);

	?>

	<table class="table table-bordered table-hover">
	<tr class="bg-info" border="1px">

		<th>ID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Contact No</th>
		<th>Price</th>



	</tr>


	<?php  while($row = $data->fetch_assoc()){  ?>

			<tr >
				
				<td><? echo $row["id"] ?></td>
				<td><? echo $row["name"] ?></td>
				<td><? echo $row["address"] ?></td>
				<td><? echo $row["contact_no"] ?></td>
				<td><? echo $row["price"] ?></td>
	
			</tr>

		<?php  }

	?>

</table>

</div>

</body>
</html>