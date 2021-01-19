<?php include('includes/header.php'); ?>

<body>

 <?php include('includes/nav.php'); ?>

<div class="container-fluid text-center">    
  <div class="row content">
   <?php include('includes/left.php'); ?>
    <div class="col-sm-8 text-left"> 
      <h1>All Products</h1>
     
     <a href="product_new.php?msg=" class="btn btn-success">New Product</a>

  


     <?php include('product_data.php'); ?>
     
    </div>
    <?php include('includes/right.php'); ?>

  </div>
</div>


<?php include('includes/footer.php'); ?>


</body>
</html>
