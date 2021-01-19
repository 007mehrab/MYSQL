
	<?php
	 require_once('db_config.php');
		
		$id = $_GET['id'];

		$sql = "DELETE FROM products WHERE id=$id";

			

		// sql to delete a record
	

	if ($db->query($sql) === TRUE) {

  header("location: products.php");
  	
	} else {
  echo "Error deleting record: " . $conn->error;
	}

	?>