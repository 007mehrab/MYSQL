<? include('includes/header.php'); ?>
<style>
  .cencel{
    float:right;
  }
</style>
<body>
  <?php require_once('connection1.php'); ?>

  <?php

  $sql = "SELECT*
  FROM products";

  $data = $db->query($sql);
  //print_r($data);

  $row = $data->fetch_assoc()
  ?>

  <? include('includes/nav.php'); ?>
  
  <div class="container-fluid text-center"> 

    <div class="row content">

      <? include('includes/left.php'); ?>


      <div class="col-sm-8 text-left"> 


        <!-- Form start -->
        
        <form class="form-horizontal" action="product_update.php" method="get">
          <div class="form-group">
            <label class="control-label col-sm-2" for="Name">Product Name:</label>
            <div class="col-sm-10">
              <input type="text" name="pname" value="<? echo $row["pname"] ?>" class="form-control"><br>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="Code">Product Code:</label>
            <div class="col-sm-10">
              <input type="text" name="pcode" value="<? echo $row["pcode"] ?>" class="form-control"><br>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="Price">Product Price:</label>
            <div class="col-sm-10">
              <input type="text" name="pprice" value="<? echo $row["pprice"] ?>" class="form-control"><br>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="Quantity">Product Quantity:</label>
            <div class="col-sm-10">
              <input type="text" name="pquantity" value="<? echo $row["pquantity"] ?>" class="form-control"><br>
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">


              <button type="btn" class="btn btn-primary">UPDATE</button>

              <button type="reset" class="cencel btn btn-warning"><a href="products.php">Cencel</a></button>

            </div>
          </div>
        </form>

        <!-- Form close -->

        <?

        if ($_SERVER['REQUEST_METHOD']=='POST') {

          $id = $_GET['id'];
          $name = $_POST['pname'];
          $code = $_POST['pcode'];
          $price = $_POST['pprice'];
          $quantity = $_POST['pquantity'];

          require_once('connection1.php');

          $sql = "UPDATE products
          SET pname='$name', pcode='$code', pprice='$price', pquantity='$quantity'
          WHERE id='$id'";

          $db->query($sql);

          if($db->affected_rows>0){
            header("location: products.php");
          }
          else{
            echo "Something Errors";
          }

    //print_r($_POST);
        }

        ?>

      </center>


    </div>



    <? include('includes/right.php'); ?>

  </div>
</div>


<? include('includes/footer.php'); ?>
</body>
</html>
