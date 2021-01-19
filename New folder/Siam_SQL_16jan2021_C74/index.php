<?php include('includes/header.php'); ?>

<body>

<?php include('includes/nav.php'); ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    
    <?php include('includes/left_sidebar.php'); ?>

    <?php // session_start(); ?>
    <div class="col-sm-8 text-left"> 
      <h1 class="text-center"><?php echo $_SESSION['fullname'] . ", "?>Welcome to Home Page</h1>

    </div>
    
    <?php include('includes/right_sidebar.php'); ?>

  </div>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
