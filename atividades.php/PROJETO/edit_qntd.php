<html> 
<?php  //EDITA O QUANTIDADE DO PRODUTO
    session_start();
        if (isset($_GET['indice'])){
            $indice = $_GET['indice']; 
            $quantidade = $_GET['quantidade'];

            $carrinho = $_SESSION['carrinho'];

            
            $produto=$carrinho[$indice] ;
            
            $produto['quantidade'] = $quantidade;
            $produto['precototal'] = $quantidade * $produto['preco'] ;


            $carrinho[$indice] = $produto ;

            $_SESSION['carrinho']= $carrinho ;

        }
        header('Location: cart.php');

?> 

<script src='botaomais.js'></script>    