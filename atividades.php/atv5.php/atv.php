<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Document</title> 
    <header><a href="https://www.fiemg.com.br/senai/"><img src="https://www.fiemg.com.br/senai/wp-content/uploads/sites/12/2023/02/Branco_TAG_SENAI_.png" alt=""></a></header>
</head>
 
<body>


    <div class="container">

        <div class="content">

            <header>Cauculador de média</header>

                <div class="conteudo">

                    <form action="tabeladenotas.php" method="post">

                        <div class="nome">

                            <label for="notas"><h1>Insira o nome do aluno:</h1></label>
                            <input type="text" name="nomealuno" id="nomealuno" value="Insira o nome">

                        </div>

                        <div class="notas">

                        <label for="notas"><h1>Insira as notas do aluno:</h1></label>

                            <label for="nota1">n1:</label>
                            <input type="number" name="nota1" id="nota1">
                            <label for="nota2">n2:</label>
                            <input type="number" name="nota2" id="nota2">
                            <label for="nota3">n3:</label>
                            <input type="number" name="nota3" id="nota3">
                            <label for="nota4">n4:</label>
                            <input type="number" name="nota4" id="nota4">
                            
                        </div>

                        <div class="botaoenviar">

                         <input type="submit" value="ENVIAR">
                        
                        </div>
                </div>

                </form> 

                <div class="Listar">
                    <a href="listar.php"><button>LISTAR</button></a>
                </div>
                  
        </div>
    </div>
</body>
</html>