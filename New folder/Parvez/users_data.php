<?php require_once('db_config.php');?>


<body>
	<div class="container">

		<br>

		<!-- Search form -->

		

		<?php

		$sql = "SELECT * FROM users";
		$data = $db->query($sql);
		?>	 

		
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Full Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
			
		


			
			
			<?php
			while($row = $data->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['fullname'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['password'] ?></td>
					
					
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