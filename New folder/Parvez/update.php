
<?php

	

	
		
		$id = $_GET['id'];
		// $Pname = $_POST['pname'];
		// $code = $_POST['pcode'];
		// $price = $_POST['pprice'];
		// $pquant = $_POST['pquantity'];

		require_once('db_config.php');

		$sql = "SELECT * from products where id=$id;";
		$data = $db->query($sql);
		$row= $data->fetch_assoc();


		if($_GET['msg']!=''){ ?>
        <p class="alert alert-danger"><?php echo $_GET['msg']; ?></p>

        <?php
        }
       ?>
    
    


	<?php include('includes/header.php'); ?>
<body>

 <?php include('includes/nav.php'); ?>

<div class="container-fluid text-center">    
  <div class="row content">
   <?php include('includes/left.php'); ?>
    <div class="col-sm-8 text-left"> 
    <div class="nproduct">
      <h1>Update Product</h1><br>
 </div>

    


      <!-- Form Start -->
      
      <form class="form-horizontal" action="product_update.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2"  name= "pname">Product Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name= "pname" value="<?php echo $row['pname']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pcode">Product Code:</label>
    <div class="col-sm-10">
      <input type="Number" class="form-control" name="pcode" value="<?php echo $row['pcode']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pprice">Product Price:</label>
    <div class="col-sm-10">
      <input type="Number" class="form-control" name="pprice" value="<?php echo $row['pprice']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pquantity">Product quantity:</label>
    <div class="col-sm-10">
      <input type="Number" class="form-control" name="pquantity" value="<?php echo $row['pquantity']?>">
    </div>
  </div>

  <input type="hidden" name="id" value="<?php echo $id; ?>">
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Update</button>
      <a href="products.php" class="btn btn-info">Back</a>
    </div>
  </div>
</form>


  <!-- form close -->








    </div>
    <?php include('includes/right.php'); ?>

  </div>
</div>


<?php include('includes/footer.php'); ?>


</body>
</html>
