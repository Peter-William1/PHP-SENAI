<?php 
    //DESTROI A SESSÃO
    session_start();
    session_destroy();

    header("Location: index.php");

?>