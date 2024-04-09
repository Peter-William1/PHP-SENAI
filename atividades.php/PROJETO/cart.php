

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">


    <title>Carrinho</title>
</head>
<header>
    <div class=titulo><a href='index.php'><img src='imagens/corvo.png'> <p> CrowTEC</p>  </a>  </div>
    <div class="nav">
        <a href='cart.php'> 
            <div class="circulo">  
                        
                
                        <?php     
                            session_start();    

                            if (!isset($_SESSION['quantcarrinho'])) {
                                $_SESSION['quantcarrinho'] = 0 ;
                                

                            }
                            $somadequantidades= 0;
                            $valorcarrinho=0;

                            foreach ($_SESSION['carrinho'] as $chave => $valor) {
                                $somadequantidades+= $valor['quantidade'] ;
                                $valorcarrinho += $valor['precototal'];
                            }

                            $_SESSION['quantcarrinho'] = $somadequantidades;

                            echo $_SESSION['quantcarrinho'];
                        ?>  
                
            
                </div>
            <div class="carrinho">
            
                <img src="imagens/carrinho.png" alt="" > 
            </div>
               
        </a>

    </div>

</header>

<body>
   
    <div class="content">
        <table>


            <?php 

                //carrinho

                session_start();

                

                $carrinho = $_SESSION['carrinho'];

               
                if ($_SESSION['quantcarrinho']>0){
                    echo "
                            <tr >
                                <div class='titulocarrinho'> 
                                    <td colspan='2' >
                                    
                                        <div class='h1car'><h1 >Carrinho de Compras</h1>
                                            <div class='botoessair'>
                                                <a href='esvaziar.php'><button>ESVAZIAR CARRINHO</button></a>
                                                <a href='index.php'><button>VOLTAR PARA PAGINA PRINCIPAL</button></a>
                                            </div>    
                                        
                                        </div>
                                        <div class='h1preco'>
                                         <h1>TOTAL: R$:$valorcarrinho</h1>
                                        </div> 
                                        
                                    
                                    </td>
                                </div>
                        </tr>

                    ";
                    
                    foreach ($_SESSION['carrinho'] as $chave => $valor) {
                        if ($valor['quantidade'] >=1 ) {

                      
                            echo "
                            
                        
                            <tr>

                                       
                                <td>    <img src='$valor[img]'> </td>
                                <td> 
                                   <div class='produto'>
                                        <div class='descricao'>  
                                            <h1>$valor[nome]</h1>    
                                            $valor[descricao] 
                                        </div>
                                            
                                        
                                            
                                        <div class='valor'>
                                            <div class='valorbox'>
                                                <h1>R$: $valor[precototal]</h1> 
                                                                
                                                <form action='edit_qntd.php' method='GET'>
                                                     <div class='editarqntd'> 
                                                         <input type='number' id='quantidade$chave' name='quantidade' value='$valor[quantidade]' min='1'>
                                                        <div class='botoes'>
                                                            <input type='submit' value='-' onclick='diminuirquantidade($chave);'>
                                                            <input type='submit' value='+' onclick='aumentarquantidade($chave);'>

                                                           
                                                        </div>         
                                                    </div>
                                         
                                                           

                                                    <input type='hidden' name='indice' value='$chave'>

                                                     
                                                                            
                                                </form>
                                                
                                            </div>
                                            <div class='botaoexcluir'>
                                                    <a href='remover.php?indice=$chave'><button><img src='imagens/lixo.png'></button></a> 
                                            </div>
                                        </div>
                                                
                                    </div>            
                                        
                                </td>
                               
                            </tr>";

                          
                            
                        } 

                    }

                }
                else  {
                    
                    echo "
                    
                       
                        <tr class='tablevazio'> 
                            
                                <td> 
                                
                                    <h1 class='vazio'>Seu carrinho esta Vazio!  </h1>  
                                
                                </td>
                            
                                
                        </tr>
                        <tr class='tablevazio'> 
                            <td class='buttons'>
                                <div class='botoessair'>
                                    <a href='esvaziar.php'><button>ESVAZIAR CARRINHO</button></a>
                                </div>
                                <div class='botoessair'>
                                    <a href='index.php'><button>VOLTAR PARA PAGINA PRINCIPAL</button></a>
                                </div>
                            
                            </td>
                        </tr>
                    
                    
                        
                    
                    
                    ";
                }


            ?>
        </table>

           
    </div>






    





</body>
</html>

<script src='botaomais.js'></script>