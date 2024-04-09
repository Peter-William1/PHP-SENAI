
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
mysqli_set_charset($conn, "utf8");
$sql = "INSERT INTO `livros`( `titulo`, `autor`, `ano_publicacao`) 
VALUES ('$_GET[titulo]',' $_GET[autor]','$_GET[ano_publicacao]')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


header("Location: consultar_livros.php");


?>