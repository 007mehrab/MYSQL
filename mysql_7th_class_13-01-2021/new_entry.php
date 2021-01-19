<? include('includes/header.php'); ?>
<style>
  .cencel{
    float:right;
  }
</style>
<body>

  <? include('includes/nav.php'); ?>
  
  <div class="container-fluid text-center"> 

    <div class="row content">

      <? include('includes/left.php'); ?>


      <div class="col-sm-8 text-left"> 
        <h1>New Products Entry</h1><br>

        <!-- Form start -->
        
        <form class="form-horizontal" action="product_submit.php" method="post">
          <div class="form-group">
            <label class="control-label col-sm-2" for="Name">Product Name:</label>
            <div class="col-sm-10">
              <input type="text" name="pname" placeholder="Product Name" class="form-control"><br>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="Code">Product Code:</label>
            <div class="col-sm-10">
              <input type="text" name="pcode" placeholder="Product Code" class="form-control"><br>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="Price">Product Price:</label>
            <div class="col-sm-10">
              <input type="text" name="pprice" placeholder="Product Price" class="form-control"><br>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="Quantity">Product Quantity:</label>
            <div class="col-sm-10">
              <input type="text" name="pquantity" placeholder="Product Quantity" class="form-control"><br>
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">

              <!-- <input type="submit" name="submit" value="SUBMIT" class="btn btn-success"> -->
              <button type="btn" class="btn btn-primary">SUBMIT</button>

              <button type="reset" class="cencel btn btn-warning"><a href="products.php">Cencel</a></button>

            </div>
          </div>
        </form>

        <!-- Form close -->


        
      </center>


    </div>



    <? include('includes/right.php'); ?>

  </div>
</div>


<? include('includes/footer.php'); ?>
</body>
</html>
