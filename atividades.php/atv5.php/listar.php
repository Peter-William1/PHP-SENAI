<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleresultados.css">
    <title>Document</title>
    <header><a href="https://www.fiemg.com.br/senai/"><img src="https://www.fiemg.com.br/senai/wp-content/uploads/sites/12/2023/02/Branco_TAG_SENAI_.png" alt=""></a></header>
</head>
<body>
<div class="container">
        <div class="content" >
            <h1>TABELA DE ALUNOS:</h1>
            <table style="width:100%">
             
                <tr>
                    <td>Nome:</td>
                    <td>Nota 1:</td>
                    <td>Nota 2:</td>
                    <td>Nota 3:</td>
                    <td>Nota 4:</td>
                    <td>Média:</td>
                    <td>Ação:</td>
                    <td>Ação:</td>
                </tr>
                    <?php
                        session_start();
                        foreach ($_SESSION['arrayaluno'] as $pos => $imprimo) {
                            $_SESSION['index'] = $pos; 

                            echo "<tr>

                            <td>  $imprimo[0]  </td>
                            <td>  $imprimo[1]  </td>
                            <td>  $imprimo[2]  </td>
                            <td>  $imprimo[3]  </td>
                            <td>  $imprimo[4]  </td>
                            <td>  $imprimo[5]  </td>
                            
                            <td> <a href='excluir.php?indice=$pos'><button>EXCLUIR</button</a>  </td>
                            <td> <a href='editar.php?indice=$pos'><button>EDITAR</button></a>  </td>
                            </tr>";
                        }
                        
                        
                
                    
                    ?>
               

            </table>

            <div class="botoes"><a href="atv.php"><button>ADICIONAR MAIS</button></a><a href="logout.php"><button>EXCLUIR LISTA</button></a></div>
        </div>
    </div>
</body>
</html>