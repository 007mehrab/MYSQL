<?php
$db=new mysqli("localhost","root","","mycompany");
if (isset($_POST['delete'])) {

  $id = $_POST['name'];

	$sql="DELETE FROM products where id=$id";

if ($db->query($sql)) {
	echo "<h2>$id deleted</h2>";
}
else{
	echo "<h2> Invalid  <?h2>";
}
}

?>


<form action="" method="post">

	<label for="delete">products Result</label>

	<select name="name" id="delete">
		<option value="0" hidden=""> Select </option>

		<?php 

		$db = new mysqli("localhost", "root", "", "mycompany");
		$sql = "SELECT * FROM products";
		$data=$db->query($sql);

		while($row = $data->fetch_assoc())  {?> 

		<option value="<?php echo $row['id']?>"> <?php echo $row['name']?> </option>

		<? } ?>

		<input type="submit" name="delete" value="DELETE">

	</select>
</form>