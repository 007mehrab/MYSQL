<?

if ($_SERVER['REQUEST_METHOD']=='POST'){

	extract($_POST);

	$password = md5('$password');

	require_once("../dbconfig.php");

	//echo "SELECT * FROM users where email='$email' AND password='$password'";

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

	$data = $db->query($sql);
	$row = $data->fetch_assoc();

	if($data->num_rows>0){

		session_start();

		$_SESSION['fullname'] = $row['fullname'];
		$_SESSION['email'] = $row['email'];

    header("Location: ../index.php");
}

}

?>