
<?php include('includes/header.php'); ?>
<body>

 <?php include('includes/nav.php'); ?>

<div class="container-fluid text-center">    
  <div class="row content">
   <?php include('includes/left.php'); ?>
    <div class="col-sm-8 text-left"> 
     

     <style>
.login-form {
    width: 340px;
    margin: 50px auto;
    font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>


   


<div class="login-form">
    <form action="users_submit.php" method="post">
        <h2 class="text-center">Log in</h2>  
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Fullname" name="fullname" required="required">
        </div>     
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" name="email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
               
    </form>

      
      
    </div>
    <?php include('includes/right.php'); ?>

  </div>
</div>


<?php include('includes/footer.php'); ?>


</body>
</html>
