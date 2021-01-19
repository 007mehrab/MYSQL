<?php include('includes/header.php'); ?>

<body>

<?php include('includes/nav.php'); ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    
    <?php include('includes/left_sidebar.php'); ?>

    <div class="col-sm-8 text-left"> 

      <h1 class="text-center">Users Edit</h1>

      <?php
        if($_GET['msg']!=''){
      ?>
        <p class="alert alert-danger"><?php echo $_GET['msg']; ?></p>
      <?php 
        }
      ?>

      <?php

        $id = $_GET['uid'];       
        require_once('db_config.php');

        $sql = "SELECT * FROM users WHERE id='$id'";

        $data = $db->query($sql);

        $row = $data->fetch_assoc();



      ?>

      <!-- Form Start -->
      <form action="includes/user_update.php" method="post">
        <div class="form-group">
          <label for="name">User Name:</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['fullname']; ?>">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email"
           value="<?php echo $row['email']; ?>">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="text" class="form-control" id="pwd" name="pass" value="<?php echo $row['password']; ?>">
        </div>
        <input type="hidden" name="eid" value="<?php echo $row['id']; ?>">

        <button type="submit" class="btn btn-success">UPDATE</button>
      </form>
      <!-- Form End -->
      
    </div>
    
    <?php include('includes/right_sidebar.php'); ?>

  </div>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
