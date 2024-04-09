<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        

        if ($_POST['usuario']=="admin" && $_POST['senha']=="pass") {
            echo "Sucesso ao se conectar!";
            session_start();

            $_SESSION['conectado']=1;
            $_SESSION['usuario']=$_POST['usuario'];

           

            header("Location: dashboard.php");
        }       
        else {
            $_SESSION['mensagem'] = "Usuario ou senha incorretos!";
            header("Location: index.php");
        }
    ?>
</body>
</html>