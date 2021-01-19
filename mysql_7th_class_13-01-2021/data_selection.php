<?php require_once('connection1.php'); ?>

<? include('includes/header.php'); ?>


</head>
<body>
	<div class="container">


	<?php

	$sql = "SELECT id, pname, pcode, pprice, pquantity,
	(pprice*pquantity) as Total
	FROM products";

	$data = $db->query($sql);
	//print_r($data);
	?>

	<div class="row">
    <div class="col-lg-8">
	<form class="form-inline active-purple-3 active-purple-4">
		<i class="fas fa-search" aria-hidden="true"></i>
		<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
		<input type="button" value="Search" class="btn btn-success">
		</div>

		<div class="col-lg-3">

		<a href="new_entry.php" class="btn btn-info form-control form-control-sm ml-3 w-10">New Insert</a>

		</div>

		<style>

			.sql{
				width: 94%;
			}

		</style>

	</form>
	</div>

    <div class="sql">

	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Product Name</th>
			<th>Product Code</th>
			<th>Product Price</th>
			<th>Product Quantity</th>
			<th>Total Price</th>
			<th>Action</th>
		</tr><br>


		<?php  while($row = $data->fetch_assoc()){   ?>

			<tr>
				<td><? echo $row["id"] ?></td>
				<td><? echo $row["pname"] ?></td>
				<td><? echo $row["pcode"] ?></td>
				<td><? echo $row["pprice"] . " $" ?></td>
				<td><? echo "<center>" . $row["pquantity"] . " pcs</center>" ?></td>
				<td><? echo $row["Total"] . " $" ?></td>
				<td>
					<a href="update_entry.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Update</a>
					<a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>

		<?php  }


		?>
	</table>

	</div>
	</div>
	

</body>
</html>