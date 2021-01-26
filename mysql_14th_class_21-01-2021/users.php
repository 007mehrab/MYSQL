<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="assets/css/animate.min.css">
<style>
  .user1{
    background-color: #879586;
    padding: 10px;
    width: 250px;
  }
  .user2{
    background-color: #868EB2;
    padding: 10px;
    width: 250px;
  }

  .user3{
    background-color: lightgray;
    padding: 10px;
    width: 300px;
  }
</style>

</head>
<body>

<?php
$db = new mysqli('localhost','root','','mycompany');

if (isset($_POST['login'])) {

$username = $_POST['username'];
$psw = $_POST['psw'];
$psw=md5($psw);
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$psw'";
$data = $db->query($sql);
if ($data->num_rows>0) {
$msg = "<h1>Valid User</h1>";
} else {
$error = "<h1>Invalid User</h1>";
}
}

?>



</head>
<body>
  <center>
 <div class="container user3">
  <center>

 <h2 class="user1 class animate__animated  animate__flip" align="center">Login Form</h2>


 <div class="user2">
   <div class="row">
     <div class="col-sm-4 col-sm-offset-4">
       <form action="" method="post">
         <label for="username"><b>Username</b></label><br>
         <input type="text" placeholder="Enter Username" name="username" required><br><br>
         <label for="psw"><b>Password</b></label><br>
         <input type="password" placeholder="Enter Password" name="psw" required><br><br>
         <button type="submit" name="login">Login</button>
       </form>
     </div>
   </div>
 </div>



  <?php if(isset($msg)){

   echo "<p class='alert alert-success'>".$msg."</p>";

 } ?>
 <?php if(isset($error)){

   echo "<p class='alert alert-danger'>".$error."</p>";

 } ?>

</center>

 </div>
</body>
</html>