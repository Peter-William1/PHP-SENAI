<html> 
<?php  //REMOVE O VALOR DE UM PRODUTO
    session_start();
    if (isset($_GET['indice'])) {
        $indice = $_GET['indice']; 
    
    
        unset($_SESSION['carrinho'][$indice]);
    }
    
    
    header('Location: cart.php');  

?> 