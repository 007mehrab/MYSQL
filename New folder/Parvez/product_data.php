<?php require_once('db_config.php');?>


<body>
	<div class="container">

		<br>

		<!-- Search form -->

		<div class="row">
			<div class="col-lg-8">

				<input class="form-control form-control-sm ml-3 w-60 " id="tableSearch" type="text"
				placeholder="Type something to search list items">
				
				
			</div>
			<button type="btn" class="btn btn-success">Search</button>

			
		</div> <br>

		

		<?php

		$sql = "SELECT * FROM products";
		$data = $db->query($sql);
		?>	 

		
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Product Name</th>
				<th>Product Code</th>
				<th>Product Price</th>
				<th>Product Quentity</th>
				<th>Action</th>
			</tr>
			
		


			
			
			<?php
			while($row = $data->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['pname'] ?></td>
					<td><?php echo $row['pcode'] ?></td>
					<td><?php echo $row['pprice'] ?></td>
					<td><?php echo $row['pquantity'] ?></td>
					
					<td>
						<a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-primary glyphicon glyphicon-edit"></a>

						<a onclick="return confirm('Are you sure you want to delete')"
						href="delete.php?id=<?php echo $row['id'];?>"  class="btn btn-danger glyphicon glyphicon-trash"></a>
					</td>
					
				</tr>	 	
				
				
				
				


			<?php   }
			?>


		</table>

		


		





	</div>
</body>
</html>