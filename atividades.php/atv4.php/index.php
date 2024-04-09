<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Micro+5&family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">

    <title>Index</title>
</head>
<body>
    <div class="content">
        <div class="formulario">
                <header><div class="login">L O G I N</div><button>X</button></header>
                <div class="valores">
                    <form action="processamento.php" method="post">
                        <label for="usuario">INSIRA O USUÁRIO</label>
                        <input type="text" name="usuario" id="usuario">
                        
                        <label for="senha">INSIRA A SENHA</label>
                        <input type="text" name="senha" id="senha">
                        


                        <input type="submit">

                    </form>
                </div>
                <p>
                    <?php 
                        session_start();
                        if (isset($_SESSION['mensagem'])) {
                            echo $_SESSION['mensagem'];
                            unset ($_SESSION['mensagem']);
                        }
                        
                    ?>


                    <a href=""></a>
                </p>
        </div>
    </div>
</body>
</html>