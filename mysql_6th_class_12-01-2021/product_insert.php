


	<?

	if ($_SERVER['REQUEST_METHOD']=='POST') {

		$name = $_POST['pname'];
		$code = $_POST['pcode'];
		$price = $_POST['pprice'];
		$quantity = $_POST['pquantity'];

		require_once('connection1.php');

		$sql = "INSERT INTO products (pname,pcode,pprice,pquantity)
		VALUES('$name','$code','$price','$quantity')";

		$db->query($sql);

		if($db->affected_rows>0){
			//echo "<script>alert('Insert Successfull');</script>";
			header("location: data_selection.php");
		}

		//print_r($_POST);
	}

	?>