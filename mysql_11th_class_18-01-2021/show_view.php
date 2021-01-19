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

		<h2 align="center">Students Details</h2> <br>


	<?php

	$db = new mysqli("localhost", "root", "", "pwad46");

		$sql = "SELECT * FROM student_details_view";

		$data = $db->query($sql);

	?>

	<table class="table table-bordered table-hover">
	<tr class="bg-info" border="1px">

		<th>ID</th>
		<th>Name</th>
		<th>EMAIL</th>
		<th>MOBILE</th>
		<th>GENDER</th>
		<th>ROAD AREA</th>
		<th>DISTRICT</th>
		<th>ACTION</th>


	</tr>


	<?php  while($row = $data->fetch_assoc()){  ?>

			<tr >
				<td class="bg-danger"><? echo $row["id"] ?></td>
				<td><? echo $row["name"] ?></td>
				<td><? echo $row["email"] ?></td>
				<td><? echo $row["mobile"] ?></td>
				<td><? echo $row["gender"] ?></td>
				<td><? echo $row["road_area"] ?></td>
				<td><? echo $row["district"] ?></td>
				<td>
					<a href="delete_student.php?id=<?php echo $row["id"] ?>">DELETE</a>
				</td>
	
	
			</tr>

		<?php  }

	?>

</table>

</div>

</body>
</html>