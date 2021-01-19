<?

ini_set("display_errors", 0);

$host = "localhost";
$user = "root";
//$user = "rootddd";  //error then die
$pass = "";  
$database = "pwad46";

//----------------------------------------
//connection with MYSQL server
//Database selection
//----------------------------------------

$conn = mysqli_connect($host, $user, $pass, $database) or die ("Something Wrong. Please connect with your Server Administration");


// if ($conn) {
// 	echo "Success";
// }
// else{ echo "Problem";
// }






?>