<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>

<header>
        <p> SportsNews.com</p>
        <div class="titulo">
            <h1><img src="https://static.vecteezy.com/system/resources/previews/001/204/011/non_2x/soccer-ball-png.png" alt="">Obrigado por votar! <img src="https://static.vecteezy.com/system/resources/previews/001/204/011/non_2x/soccer-ball-png.png" alt=""> </h1>

        </div>
 </header>

<div class="content">
<div class="votos">
<?php
session_start();

// PARTES DOS VOTOS DOS TIMES


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["voto"])) {
    $timeescolhido = $_POST["voto"];

    switch ($timeescolhido) {
        case "Flamengo":
            if (!isset($_SESSION['votos_flamengo']) ) {
                $_SESSION['votos_flamengo'] = 0;
            }

            $_SESSION['votos_flamengo']++;
            break;

        case "Vasco":
            if (!isset($_SESSION['votos_vasco'])) {
                $_SESSION['votos_vasco'] = 0;
            }
            $_SESSION['votos_vasco']++;
            break;

        case "Botafogo":
            if (!isset($_SESSION['votos_botafogo'])) {
                $_SESSION['votos_botafogo'] = 0;
            }
            $_SESSION['votos_botafogo']++;
            break;

        case "Fluminense":
            if (!isset($_SESSION['votos_fluminense'])) {
                $_SESSION['votos_fluminense'] = 0;
            }
            $_SESSION['votos_fluminense']++;
            break;

        case "São Paulo":
            if (!isset($_SESSION['votos_saopaulo'])) {
                $_SESSION['votos_saopaulo'] = 0;
            }
            $_SESSION['votos_saopaulo']++;
            break;

        case "Palmeiras":
            if (!isset($_SESSION['votos_palmeiras'])) {
                $_SESSION['votos_palmeiras'] = 0;
            }
            $_SESSION['votos_palmeiras']++;
            break;

        case "Corinthians":
            if (!isset($_SESSION['votos_corinthians'])) {
                $_SESSION['votos_corinthians'] = 0;
            }
            $_SESSION['votos_corinthians']++;
            break;

        case "Santos":
            if (!isset($_SESSION['votos_santos'])) {
                $_SESSION['votos_santos'] = 0;
            }
            $_SESSION['votos_santos']++;
            break;
    }
}


//VOTOS EM GERAL

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (!isset($_SESSION['votos'])) {
            $_SESSION['votos'] = 0;
        }


        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["voto"])) {
            
            $_SESSION['votos']++;

        
            echo "Olá, " . $_SESSION['votos'] . " já votaram. Seu voto foi: " . $_POST["voto"];
        }
    }
    ?>
</div>

    <div class="separador2">  
        <div class="imagens">
            <img src="https://static.vecteezy.com/system/resources/previews/016/326/742/non_2x/3d-realistic-golden-soccer-ball-on-it-isolated-on-transparent-free-png.png" alt="">
        </div>
    </div>

    <div class="times">
        <p>Tabela de votos:</p>
        <table style="width:100%">
            <tr>
                <th>TIMES:</th>
                <th>VOTOS:</th>
                <th>PORCENTAGEM:</th>
            </tr>
            <tr>
                <th>Flamengo</th>
                <th><?php echo $_SESSION['votos_flamengo'] ?></th>
                <th><?php echo number_format(($_SESSION['votos_flamengo'] / $_SESSION['votos'] * 100), 2) ?>%</th>
            </tr>
            <tr>
                <th>Vasco</th>
                <th><?php echo $_SESSION['votos_vasco'] ?></th>
                <th><?php echo number_format(($_SESSION['votos_vasco'] / $_SESSION['votos'] * 100), 2) ?>%</th>
            </tr>
        
            <tr>
                <th>Botafogo</th>
                <th><?php echo $_SESSION['votos_botafogo'] ?></th>
                <th><?php echo number_format(($_SESSION['votos_botafogo'] / $_SESSION['votos'] * 100), 2) ?>%</th>
            </tr>
        
            <tr>
                <th>Fluminense</th>
                <th><?php echo $_SESSION['votos_fluminense'] ?></th>
                <th><?php echo number_format(($_SESSION['votos_fluminense'] / $_SESSION['votos'] * 100), 2) ?>%</th>
            </tr>
        
            <tr>
                <th>São Paulo</th>
                <th><?php echo $_SESSION['votos_saopaulo'] ?></th>
                <th><?php echo number_format(($_SESSION['votos_saopaulo'] / $_SESSION['votos'] * 100), 2) ?>%</th>
            </tr>
        
            <tr>
                <th>Palmeiras</th>
                <th><?php echo $_SESSION['votos_palmeiras'] ?></th>
                <th><?php echo number_format(($_SESSION['votos_palmeiras'] / $_SESSION['votos'] * 100), 2) ?>%</th>
            </tr>
        
            <tr>
                <th>Corinthians</th>
                <th><?php echo $_SESSION['votos_corinthians'] ?></th>
                <th><?php echo number_format(($_SESSION['votos_corinthians'] / $_SESSION['votos'] * 100), 2) ?>%</th>
            </tr>
        
            <tr>
                <th>Santos</th>
                <th><?php echo $_SESSION['votos_santos'] ?></th>
                <th><?php echo number_format(($_SESSION['votos_santos'] / $_SESSION['votos'] * 100), 2) ?>%</th>
            </tr>
        </table>
        <a href="index.php"><button>VOTAR NOVAMENTE</button></a>
    
        



        

    </div>




</div>
</body>
</html>