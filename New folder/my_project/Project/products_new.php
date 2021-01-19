<?php include("includes/header.php");?>
<body>

<?php include('includes/nav.php');?>
  
<div class="container-fluid text-center">    
  <div class="row content">

    <?php include('includes/left_sidebar.php');?>

    <div class="col-sm-8 text-left">

    <h1 class="text-danger text-center">Product Insert</h1><br>


      <?php if($_GET['msg']!=''){ ?>

        <p class="alert alert-danger"><?php echo $_GET['msg'];?></p>

      <?php } ?>
    <!-- From -->

    	<form class="form-horizontal" action="includes/product_submit.php" method="post">
          <div class="form-group">
            <label class="control-label col-sm-3" for="pname">Product Name:</label> <!-- Stock Keeping Unit-->
            <div class="col-sm-8">
              <input type="text" class="form-control" id="pname" placeholder="Enter Product Name" name="pname">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="pcode">Product Code:</label>
            <div class="col-sm-8">          
              <input type="text" class="form-control" id="pcode" placeholder="Enter Product Code" name="pcode">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="pprice">Product Price:</label>
            <div class="col-sm-8">          
              <input type="type" class="form-control" id="pprice" placeholder="Enter Product Price" name="pprice">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="pquantity">Product Quantity:</label>
            <div class="col-sm-8">          
              <input type="type" class="form-control" id="pquantity" placeholder="Enter Product Quantity" name="pquantity">
            </div>
          </div>


          <div class="form-group">      
            <div class="col-sm-offset-3 col-sm-8">

              <input type="hidden" name="id" value="<?php echo $id ?>">

              <button type="submit" class="btn btn-success">SUBMIT</button>
            </div>
          </div>
        </form>

      
    </div>

    <?php include('includes/right_sidebar.php');?>

  </div>
</div>



<?php include('includes/footer.php');?>


</body>
</html>
