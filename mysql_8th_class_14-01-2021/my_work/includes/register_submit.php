<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5('$password');

require_once("../dbconfig.php");

if ($fullname=='' || $email=='' || $password=='') {
$msg = "All fields must be fill up";
header("Location: ../users_register.php?req=$msg&msg=&error=");


} else {
//check existing user
$data = $db->query("SELECT email FROM  users WHERE email = '$email'");
if ($data->num_rows==0) {
$sql = "INSERT INTO users (fullname,email,password) VALUES ('$fullname','$email','$password')";

$db->query($sql);
$msg = "Successfully inserted";

if($db->affected_rows>0){
header("Location: ../register.php?ins=$msg&upd=&del=&msg=&req=");
}

} else {
$msg = "$email address already exist";
header("Location: ../users_register.php?ins=$msg&upd=&del=&msg=&error=$msg&req");

}


}
}

?>