<?php include("includes/header.php");?>
<body>

<?php include('includes/nav.php');?>
  
<div class="container-fluid text-center">    
  <div class="row content">

    <?php include('includes/left_sidebar.php');?>

    <div class="col-sm-8 text-left"> 
      <h2 class="text-danger text-center">All Products</h2><br>

      <?php if($_GET['upd']!=''){ ?>

        <p class="alert alert-danger"><?php echo $_GET['upd'];?></p>

      <?php } ?>

      <?php if($_GET['ins']!=''){ ?>

        <p class="alert alert-danger"><?php echo $_GET['ins'];?></p>

      <?php } ?>

      <table class="table table-hover">
        <tr class="bg-info">
          <th>ID</th>
          <th>Product Name</th>
          <th>Product Code</th>
          <th>Product Price</th>
          <th>Product Quantity</th>
          <th>Total</th>
          <th>Action</th>
        </tr>

        <?

        require_once('dbconfig.php');

        $sql = "SELECT id, pname, pcode, pprice, pquantity,(pprice*pquantity) as Total
        FROM products";

        $data = $db->query($sql);

        while ($row = $data->fetch_assoc()) { ?>

        <tr>

          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['pname'] ?></td>
          <td><?php echo $row['pcode'] ?></td>
          <td><?php echo $row['pprice'] ?></td>
          <td><?php echo $row['pquantity'] ?></td>
          <td><?php echo $row['Total'] ?></td>
          <td>
            
            <a href="products_edit.php?id=<? echo $row['id'] ?>&msg=&ins=&upd=" class="btn btn-primary">
              <i class="glyphicon glyphicon-edit"></i>
            </a>

             <a onclick="return confirm('Are You Sure You Want To Delete This Item')" href="includes/product_delete.php?id=<? echo $row['id'] ?>&msg=&ins=&upd=" class="btn btn-danger">
              <i class="glyphicon glyphicon-trash"></i>
            </a>

          </td>

        </tr>
          
        <?php }   ?>


      </table>



<a href="products_new.php?msg=&ins=&upd=" class="btn btn-warning">Add New Product</a>

    </div>

    <?php include('includes/right_sidebar.php');?>

  </div>
</div>



<?php include('includes/footer.php');?>


</body>
</html>
