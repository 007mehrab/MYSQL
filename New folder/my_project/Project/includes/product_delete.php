<?

require_once('../dbconfig.php');

$id=$_GET['id'];

$sql = "DELETE from products where id='$id'";

$db->query($sql);

header("Location: ../products.php?msg=&ins=&upd=");

?>