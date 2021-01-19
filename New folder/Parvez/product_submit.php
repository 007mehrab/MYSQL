<?php
		if($_SERVER['REQUEST_METHOD']=='POST'){

		
			$Pname = $_POST['pname'];
			$code = $_POST['pcode'];
			$price = $_POST['pprice'];
			$pquant = $_POST['pquantity'];

		

			require_once('db_config.php');

			if($Pname=='' || $code=='' || $price=='' || $pquant==''){
				$msg= "All fields must be fill up";
			header("location: product_new.php?msg=$msg");

		    }else{
		    	$sql = "INSERT INTO products 
		      (pname,pcode,pprice,pquantity) VALUES ('$Pname','$code','$price','$pquant')";
		       $db->query($sql);

		       if($db->affected_rows>0){
			header("location: products.php");
		    }  
		    }
		}

			 
		

		


	  



	?>
	