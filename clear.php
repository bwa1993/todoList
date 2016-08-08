<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dataBase = "todo";

// Connect to DB
$conn = mysqli_connect($servername, $username, $password, $dataBase);
// Throw an error if Connection Fails
if(!$conn) {
	die('Could not connect');
}

// query to delete all items from table `items`
$sql = "DELETE FROM items";

$clear = mysqli_query($conn, $sql);

if (!$clear) {
	die('Could not delete data');
}

echo "Deleted data successfully\n";

header('Location: index.php');

?>