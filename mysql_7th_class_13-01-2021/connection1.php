<?

ini_set("display_errors", 0);

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "pwad46");

//define("DB", "pwad46DDD");   //Faild to connect to mysql : Unknown database 'pwad46ddd'

 


//---connection with MYSQL server----------
//---Database selection--------------------


$db = new mysqli(HOST, USER, PASS, DB);

//echo $db->connect_errno;
//echo $db->connect_error;


//-----check connection------

if ($db->connect_errno) {

	echo "Faild to connect to mysql : " . $db->connect_error;
	exit();
}

//echo "Connecting";



?>