<html>
<?php 
    $indice = $_GET['indice']; 
   
    session_start();
    
    unset($_SESSION['arrayaluno'][$indice]);
    header("Location: listar.php")

?>
</html>