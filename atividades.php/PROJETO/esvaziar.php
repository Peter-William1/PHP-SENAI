<?php
    session_start();

    
    // Código para esvaziar o carrinho
    $_SESSION['carrinho'] = array(); // Exemplo de esvaziamento do carrinho

    // Redireciona de volta para a página do carrinho ou página principal
    header('Location: cart.php');
    exit();
?>