<?  

session_start();

if (!isset($_SESSION['email'])) {
	header("Location: login.php");
}

?>


<!DOCTYPE html>

<html lang="en">
<head>
  <title>Users Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/style.css">
</head>