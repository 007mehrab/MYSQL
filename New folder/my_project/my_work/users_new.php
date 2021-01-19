<?php include("includes/header.php");?>
<body>

<?php include('includes/nav.php');?>
  
<div class="container-fluid text-center">    
  <div class="row content">

    <?php include('includes/left_sidebar.php');?>

    <div class="col-sm-8 text-left"> 
      <h1 class="text-danger text-center">New User</h1>

      <?php if($_GET['msg']!=''){ ?>

        <p class="alert alert-danger"><?php echo $_GET['msg'];?></p>

      <?php } ?>

      

<!-- Form Open-->
       
        <form class="form-horizontal" action="includes/user_submit.php" method="post">
          <div class="form-group">
            <label class="control-label col-sm-2" for="fullname">FullName:</label> <!-- Stock Keeping Unit-->
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fullname" placeholder="Enter Fullname" name="fullname">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-10">          
              <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
            </div>
          </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
      </div>

      <!-- Form Close-->


    <?php include('includes/right_sidebar.php');?>

  </div>
</div>

<?php include('includes/footer.php');?>


</body>
</html>
