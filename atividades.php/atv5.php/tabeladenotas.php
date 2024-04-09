<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    
</head>
<body>
    <?php 
        session_start();


        if (isset($_SESSION['arrayaluno'])) {
            $alunos = $_SESSION['arrayaluno'];
            $_SESSION['index'] = 0; 

        }
        else {
            $alunos= array();
            
        }
        //etapa 01
        
        $n1= $_POST['nota1'];
        $n2= $_POST['nota2'];
        $n3= $_POST['nota3'];
        $n4= $_POST['nota4'];


        $nomealuno= $_POST['nomealuno'];

        $media = (($_POST["nota1"]+$_POST["nota2"]+$_POST["nota3"]+$_POST["nota4"])/4);

        $novoaluno = array($nomealuno, $n1, $n2, $n3, $n4, $media);

        array_push($alunos, $novoaluno);


      
        
        $_SESSION['arrayaluno']= $alunos;
        
        header("Location: listar.php");

    ?>
    

    
</body>
</html>