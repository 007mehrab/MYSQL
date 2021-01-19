<?php include('includes/header.php'); ?>

<body>

<?php include('includes/nav.php'); ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    
    <?php include('includes/left_sidebar.php'); ?>

    <div class="col-sm-8 text-left"> 

      <!-- <h1 class="text-center">Users Entry</h1> -->
      <h1 class="text-center">Users Registration</h1>

      <?php
      	if($_GET['msg']!=''){
      ?>
      	<p class="alert alert-danger"><?php echo $_GET['msg']; ?></p>
      <?php	
      	}
      ?>

      <!-- Form Start -->
      <form action="includes/user_register.php" method="post">
      	<div class="form-group">
      		<label for="name">User Name:</label>
      		<input type="text" class="form-control" id="name" name="name">
      	</div>
      	<div class="form-group">
      		<label for="email">Email:</label>
      		<input type="email" class="form-control" id="email" name="email">
      	</div>
      	<div class="form-group">
      		<label for="pass">Password:</label>
      		<input type="password" class="form-control" id="pwd" name="pass">
      	</div>

      	<button type="submit" class="btn btn-success">SUBMIT</button>
      </form>
      <!-- Form End -->
      
    </div>
    
    <?php include('includes/right_sidebar.php'); ?>

  </div>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
