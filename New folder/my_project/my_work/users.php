<?php include("includes/header.php");?>
<body>


<?php include('includes/nav.php');?>

  
<div class="container-fluid text-center">    
  <div class="row content">

    <?php include('includes/left_sidebar.php');?>


    <div class="col-sm-8 text-left"> 

      <h1 class="text-center text-primary">All users</h1>

      <?php if($_GET['upd']!=''){ ?>

        <p class="alert alert-danger"><?php echo $_GET['upd'];?></p>

      <?php } ?>


      <table class="table table-hover">
        
        <tr class="bg-info">
          <th>ID</th>
          <th>FullName</th>
          <th>Email</th>
          <th>Password</th>
          <th>Action</th>
        </tr>
      <?php
      require_once('dbconfig.php');

        $sql = "SELECT * FROM users";

        $data = $db->query($sql);

        while($row = $data->fetch_assoc()){



      ?>

        <tr>
          <td> <?php echo $row['id']?> </td>
          <td> <?php echo $row['fullname']?> </td>
          <td> <?php echo $row['email']?> </td>
          <td> <?php echo $row['password']?> </td>
          <td> 
            <a href="users_edit.php?pid=<?php echo $row['id']?>&upd=" class="btn btn-primary">
              <i class="glyphicon glyphicon-edit"></i>
            </a>

            &nbsp; 
            
            <a onclick="return confirm('Are you sure you want to delete')" href="includes/user_delete.php?pid=<?php echo $row['id']?>&upd=" class="btn btn-danger">
              <i class="glyphicon glyphicon-trash"></i>
            </a> 
          </td>
        </tr>
<?php   } ?>

      </table>

      <a href="users_new.php?msg=&upd=" class="btn btn-warning">New User</a>
      
    </div>

    <?php include('includes/right_sidebar.php');?>

  </div>
</div>
<br/>
<?php include('includes/footer.php');?>


</body>
</html>
