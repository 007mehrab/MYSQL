<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/style2.css">

  <style>
    .ta{
      background-color: blue;
      color: white;
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




  <div class="login-wrap">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
      <div class="login-form">
        <div class="sign-in-htm">
          <form action="" method="post">
            <div class="group">
              <label for="username" class="label">Username</label>
              <input name="username" type="text" class="input">
            </div>
            <div class="group">
              <label for="psw" class="label">Password</label>
              <input name="psw" type="password" class="input" data-type="password">
            </div>

            <!-- <div class="group">
              <input id="check" type="checkbox" class="check" checked>
              <label for="check"><span class="icon"></span> Keep me Signed in</label>
            </div> -->

            <div class="group">
              <input type="submit" name="login" class="button" value="Sign In">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="#forgot">Forgot Password?</a>
            </div>

          </form>
        </div>


        <div class="sign-up-htm">
          <div class="group">
            <label for="username" class="label">Username</label>
            <input name="username" type="text" class="input">
          </div>
          <div class="group">
            <label for="psw" class="label">Password</label>
            <input name="psw" type="password" class="input" data-type="password">
          </div>
          <div class="group">
            <label for="psw" class="label">Repeat Password</label>
            <input name="psw" type="password" class="input" data-type="password">
          </div>
          <div class="group">
            <label for="psw" class="label">Email Address</label>
            <input name="psw" type="text" class="input">
          </div>
          <div class="group">
            <input type="submit" name="login" class="button" value="Sign Up">
          </div>
          <div class="hr"></div>
          <div class="foot-lnk">
            <label for="tab-1">Already Member?</a>
            </div>
          </div>
        </div>

<center>
        <?php if(isset($msg)){

         echo "<i class='ta'>".$msg."</i>";

       } ?>

       <?php if(isset($error)){

         echo "<i class='ta'>".$error."</i>";

       } ?>

</center>
     </div>
   </div>
</body>
</html>