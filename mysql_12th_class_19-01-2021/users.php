<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php
$db = new mysqli('localhost','root','','company');

if (isset($_POST['login'])) {

$username = $_POST['username'];
$psw = $_POST['psw'];
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
<body align="center">
 <div class="container">

 <h2 class="class animate__animated  animate__flip" align="center">Login Form</h2>


 <div>
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



 </div>
</body>
</html>