<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "biblioteca";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM livros WHERE id=$_GET[id]";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: consultar_livros.php");
?>