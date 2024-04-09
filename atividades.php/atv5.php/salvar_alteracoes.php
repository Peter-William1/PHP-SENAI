<?php 
    session_start(); 
    
       
    $n1= $_GET['nota1'];
    $n2= $_GET['nota2'];
    $n3= $_GET['nota3'];
    $n4= $_GET['nota4'];


    $nomealuno= $_GET['nomealuno'];

    $media = (($_GET["nota1"]+$_GET["nota2"]+$_GET["nota3"]+$_GET["nota4"])/4);

    $novoaluno = array($nomealuno, $n1, $n2, $n3, $n4, $media);

    


    $indice= $_GET['indice'];
        
    $_SESSION['arrayaluno'][$indice] = $novoaluno;
        
    header("Location: listar.php")
    
?>
