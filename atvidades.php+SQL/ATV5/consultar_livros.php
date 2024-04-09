<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">    
</head>
<header>
<div class='titulo'>
        <h1><a href="consultar_livros.php">CONSULTAR LIVROS</a> </h1>
</div>

<form action="consultar_livros.php" method="GET" >
        <label for="buscar">Buscar por Autor ou Título:</label>

        <div class="buscar">
            <input class='inputext' type="text" name="busca" id="busca   ">
            <input class='botaobuscar' type="submit" value="BUSCAR">
        </div>
    </form>

</header>
<body>


    <div class='livros'>
        <h1>LIVROS:</h1>
    </div>
   
   


   
        <table border="1" >
            <div class="tablelivros">
                <thead>
                        <?php 
                            

                            include("conexao.php");
                            
                            $busca = $_GET['busca'];
                            
                            if (isset($busca) && !empty($busca)) {
                                $sql = "SELECT * FROM livros WHERE autor LIKE '%$busca%' OR titulo LIKE '%$busca%'";

                    
                            }
                            else {
                                $sql = "SELECT * FROM livros";
                            }

                            
                            mysqli_set_charset($conn, "utf8");
                            $result = mysqli_query($conn, $sql);
        
                            if (mysqli_num_rows($result) > 0) {
                                
                                echo "   
                                <th  >ID</th>    
                                <th >Autor</th> 
                                <th >Título</th> 
                                <th >Ano de Publicação</th>
                                <th colspan='2' >Ação</th>
                                ";


                            while($row = mysqli_fetch_assoc($result)) {$saida[]=$row;
                            }
                            } else echo "<div class='resultado'> <p>NENHUM RESULTADO ENCONTRADO</p>  </div>";
                            
                        
                        ?>
                        
                        
                            
                
                </thead>
      
            <tbody>

                





                <?php


                  

                    
                    foreach ($saida as $contato) { 
                        echo "<tr>
                        <td>  $contato[id]  </td>
                        <td>  $contato[autor]  </td>
                        <td>  $contato[titulo]  </td>
                        <td>  $contato[ano_publicacao]  </td>
                        <td> <a href='delete.php?id=$contato[id]'> EXCLUIR </a> </td>
                        <td> <a href='editar.php?id=$contato[id]'> EDITAR </a> </td>
                        </tr>";

                    }

                

                ?>
            </tbody>    
        
            
            </div>
        </table>
    <div class="buttons">
        <button onclick="window.location='consultar_livros.php'">VOLTAR</button>
        <button onclick="window.location='cadastrar.php'"> CADASTRAR</button>
    </button>

</body>
</html>