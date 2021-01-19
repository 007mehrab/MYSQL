<?php include('includes/header.php'); ?>

<body>

<?php include('includes/nav.php'); ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    
    <?php include('includes/left_sidebar.php'); ?>

    <div class="col-sm-8 text-left"> 

      <h1 class="text-center">All Users List</h1>

      <?php
      	if($_GET['del']!=''){
      ?>
      	<p class="alert alert-danger"><?php echo $_GET['del']; ?></p>
      <?php
      	}
      ?>

      <?php
      	if($_GET['upd']!=''){
      ?>
      	<p class="alert alert-danger"><?php echo $_GET['upd']; ?></p>
      <?php
      	}
      ?>


      <?php

      	require_once('db_config.php');

      	$sql = "SELECT * FROM users";

      	$data = $db->query($sql);

        // ctrl + space = show all property of class

      ?>

      <table class="table table-responsive">  
      	<tr>
      		<th>ID</th>
      		<th>FullName</th>
      		<th>Email</th>
      		<th>Password</th>
      		<th>Action</th>	
      	</tr>
      <?php
      	while($row = $data->fetch_assoc()){
      		

      ?>
      	<tr>
      		<td><?php echo $row['id']; ?></td>
      		<td><?php echo $row['fullname']; ?></td>
      		<td><?php echo $row['email']; ?></td>
      		<td><?php echo $row['password']; ?></td>
      		<td>
      			<a href="user_edit.php?uid=<?php echo $row['id']; ?>&msg=&del=" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i></a>

      			<a onclick="return confirm('Are you sure want to delete')" href="includes/user_delete.php?uid=<?php echo $row['id']; ?>&upd=" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
      		</td>
      	</tr>
      <?php
      	}
      ?>
      </table>

      <br>&nbsp;&nbsp;
      <a href="user_registration.php?msg=" class="btn btn-success">New Entry</a>
      
    </div>
    
    <?php include('includes/right_sidebar.php'); ?>

  </div>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
