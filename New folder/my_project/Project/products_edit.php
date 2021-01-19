<?php include("includes/header.php");?>
<body>

<?php include('includes/nav.php');?>
  
<div class="container-fluid text-center">    
  <div class="row content">

    <?php include('includes/left_sidebar.php');?>

    <div class="col-sm-8 text-left">

    <h1 class="text-danger text-center">Products Update</h1><br>

    <?php 

      require_once('dbconfig.php');

      $id = $_GET['id'];

      $sql = "SELECT * FROM products WHERE id = '$id'";

      $data = $db->query($sql);
      $row = $data->fetch_assoc();

    ?>


    <form class="form-horizontal" action="includes/product_update.php" method="post">
          <div class="form-group">
            <label class="control-label col-sm-3" for="pname">Product Name:</label> <!-- Stock Keeping Unit-->
            <div class="col-sm-8">
              <input type="text" class="form-control" id="pname" name="pname" value="<?php echo $row['pname']?>">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="pcode">Product Code:</label>
            <div class="col-sm-8">          
              <input type="text" class="form-control" id="pcode"  name="pcode" value="<?php echo $row['pcode']?>">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="pprice">Product Price:</label>
            <div class="col-sm-8">          
              <input type="type" class="form-control" id="pprice"  name="pprice" value="<?php echo $row['pprice']?>">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3" for="pquantity">Product Quantity:</label>
            <div class="col-sm-8">          
              <input type="type" class="form-control" id="pquantity" name="pquantity" value="<?php echo $row['pquantity']?>">
            </div>
          </div>


          <div class="form-group">      
            <div class="col-sm-offset-3 col-sm-8">

              <input type="hidden" name="id" value="<?php echo $id ?>">

              <button type="submit" class="btn btn-success">UPDATE</button>
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
