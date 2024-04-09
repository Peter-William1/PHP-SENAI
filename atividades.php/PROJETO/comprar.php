<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.1">
    <title>Document</title>
</head>
<body>
    
    <?php
        session_start();
        
        if (isset($_SESSION['carrinho'])) {
                $carrinho = $_SESSION['carrinho']; 
                
        }

        else {
            $carrinho= array(); 
        }
        

        $produtos= $_SESSION['produtos']; //CARREGA OS PRODUTOS PARA UMA VARIAVEL LOCAL

        $idproduto= $_GET['idproduto'];

        $produto = null; //CARREGA ANTERIORMENTE O PRODUTO COMO NULO

        foreach ($produtos as $chave => &$valor) { //PERCORRE A LISTA DE PRODUTOS E INCLUI AQUELE QUE POSSUE O MESMO ID DO COMPRADO
                if (($valor['id'])==$idproduto){
                    
                    $produto = [
                        'id' => $valor['id'], 'nome' => $valor['nome'], 'descricao' => $valor['descricao'], 'preco' => $valor['preco'], 'img' => $valor['img'], 'quantidade' => $valor['quantidade'], 'precototal' => $valor['precototal'] 
                    ];

                    
                    

                }
            
            }


            

            if ($produto !== null) { 
                $produto_existe = false; 
                foreach ($carrinho as &$item) { //PERCORRE O CARRINHO, PROCURANDO UM ID SEMELHANTE CASO O PRODUTO JA EXISTA
                    if ($item['id'] == $idproduto) {
                        $item['quantidade'] += 1;
                        $item['precototal'] = $item['preco'] * $item['quantidade'];
                        $produto_existe = true;
                        break;
                    }
                }
            
                // SE O PRODUTO NÃO EXISTIR, O ADICIONA PARA O CARRINHO
                if (!$produto_existe) {
                    $carrinho[] = $produto;
                }
            }


        $_SESSION['carrinho']= $carrinho; //INCLUE O PRODUTO PARA A VARIAVEL DE SESSÃO DO CARRINHO

        header('Location: cart.php');
        
    ?>
    




</body>
</html>