<?php
include("conexao.php");

mysqli_set_charset($conn, "utf8");
$sql = " UPDATE `livros` 
SET `titulo`='$_GET[titulo]',`autor`='$_GET[autor]',`ano_publicacao`='$_GET[ano_publicacao]' 
WHERE id='$_GET[id]'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: consultar_livros.php");


?>
