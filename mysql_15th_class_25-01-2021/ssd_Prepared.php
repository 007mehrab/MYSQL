
<!-- 
CREATE TABLE products1 (
   id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
   sku VARCHAR(255) NOT NULL,
   name VARCHAR(255) NOT NULL,
   price VARCHAR(32) NOT NULL,
   PRIMARY KEY(id)
);
 -->


<?php
    // Create a new server connection
    $mysqli = new mysqli('localhost', 'root', '', 'pwad46');

    // Create the query and corresponding placeholders
    $query = "INSERT INTO products1 SET sku=?, name=?, price=?";

    // Create a statement object
    $stmt = $mysqli->stmt_init();

    // Prepare the statement for execution
    $stmt->prepare($query);

    // Bind the parameters
    $stmt->bind_param('ssd', $sku, $name, $price);

    // Assign the posted sku array
   // $sku = $_POST['sku'];

    // Assign the posted name array
   // $name = $_POST['name'];

    // Assign the posted price array
    //$price = $_POST['price'];

    // Initialize the counter
    

    // Cycle through the array, and iteratively execute the query
    if (isset($_POST['submit'])) {
        $sku = $_POST['sku'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        $stmt->execute();
    }

    // Recuperate the statement resources
    $stmt->close();

    // Close the connection
    $mysqli->close();
?>

<form action="" method="post" >

<input type="text" name="sku" placeholders="sku">
<input type="text" name="name" placeholders="name">
<input type="text" name="price" placeholders="price">
<input type="submit" value="SEND" name="submit">

</form>