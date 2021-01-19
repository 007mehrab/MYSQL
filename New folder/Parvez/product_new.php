<?php include('includes/header.php'); ?>
<body>

 <?php include('includes/nav.php'); ?>

<div class="container-fluid text-center">    
  <div class="row content">
   <?php include('includes/left.php'); ?>
    <div class="col-sm-8 text-left"> 
    <div class="nproduct">
      <h1>New Product Entry</h1><br>
 </div>

    <?php

      if($_GET['msg']!=''){ ?>
        <p class="alert alert-danger"><?php echo $_GET['msg']; ?></p>

     

    <?php
      }

    ?>


      <!-- Form Start -->
      
      <form class="form-horizontal" action="product_submit.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2"  name= "pname">Product Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name= "pname" placeholder="Enter Product Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pcode">Product Code:</label>
    <div class="col-sm-10">
      <input type="Number" class="form-control" name="pcode" placeholder="Enter Product Code">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pprice">Product Price:</label>
    <div class="col-sm-10">
      <input type="Number" class="form-control" name="pprice" placeholder="Enter Product Price">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pquantity">Product quantity:</label>
    <div class="col-sm-10">
      <input type="Number" class="form-control" name="pquantity" placeholder="Enter Product quantity">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
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
