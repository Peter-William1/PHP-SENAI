<?php
include("conexao.php");

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