<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_cadastrar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">    
</head>
<header>
<div class='titulo'>
        <h1><a href="consultar_livros.php">CONSULTAR LIVROS</a> </h1>
</div>



</header>
<body>
    <form action="salvar.php" method="GET">
        <label for="autor">Autor: </label>
        <input type="text" name="autor" required>
        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo" required>
        <label for="ano de publicacao">Ano de Publicacão: </label>
        <input type="text" name="ano_publicacao" required>
        <input type="hidden" name="id" value=<?php echo $_GET["id"]?>>

        <input type="submit" value="SALVAR">
    </form>

        
    <button onclick="window.location='consultar_livros.php'">VOLTAR</button>

    
</body>
</html>