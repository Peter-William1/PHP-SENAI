

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
            <h1><img src="https://static.vecteezy.com/system/resources/previews/001/204/011/non_2x/soccer-ball-png.png" alt="">Vote no seu time favorito! <img src="https://static.vecteezy.com/system/resources/previews/001/204/011/non_2x/soccer-ball-png.png" alt=""> </h1>

        </div>
    </header>
    
    
    <div class="content">
    
        
        
    
        <div class="separador">

        
        <p>
            <b>V O T A Ç Ã O</b>
            <br>
            
            Amantes do futebol, é hora de agir! A votação está aí, e seu time precisa do seu apoio. Cada voto conta, cada clique faz a diferença. Mostre sua paixão, celebre suas cores e faça seu time brilhar mais forte. Juntos, somos imparáveis! ⚽💪 #VotePeloSeuTime #PaixãoFutebolística
        </p>    
        <div class="imagens">
            <div class="imagens1">
                <img src="https://www.lance.com.br/galerias/wp-content/uploads/2023/07/3-imagens-3-758x474.png" alt="">
            </div>
            <div class="imagens2">
                <img src="https://clubepaineiras.org.br/wp-content/uploads/2022/05/jogadores.jpg" alt="">
                <img src="https://lncimg.lance.com.br/cdn-cgi/image/width=403,height=240,fit=contain,gravity=0.5x0.5,quality=75,format=webp/uploads/2024/02/53537634908_9d9a8fd343_o-scaled-aspect-ratio-512-320.jpg" alt="">
            </div>
                
            
        </div>

        </div>
            
        
        <div class="formulario">
        <form action="resultado.php" method="post" >

                <div class="escudo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Flamengo_braz_logo.svg/1200px-Flamengo_braz_logo.svg.png" alt="Flamengo">
            <label for="flamengo">FLAMENGO</label>
            <input type="radio" name="voto" id="flamengo" value="Flamengo" required>
        </div>

        <div class="escudo">
            <img src="https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/3454.png" alt="Vasco">
            <label for="vasco">Vasco</label>
            <input type="radio" name="voto" id="vasco" value="Vasco" required>
        </div>

        <div class="escudo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Botafogo_de_Futebol_e_Regatas_logo.svg/1200px-Botafogo_de_Futebol_e_Regatas_logo.svg.png" alt="Botafogo">
            <label for="botafogo">Botafogo</label>
            <input type="radio" name="voto" id="botafogo" value="Botafogo" required>
        </div>

        <div class="escudo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Fluminense_FC_escudo.png" alt="Fluminense">
            <label for="fluminense">Fluminense</label>
            <input type="radio" name="voto" id="fluminense" value="Fluminense" required>
        </div>

        <div class="escudo">
            <img src="https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/2026.png" alt="São Paulo">
            <label for="saopaulo">São Paulo</label>
            <input type="radio" name="voto" id="saopaulo" value="São Paulo" required>
        </div>

        <div class="escudo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Palmeiras_logo.svg/1200px-Palmeiras_logo.svg.png" alt="Palmeiras">
            <label for="palmeiras">Palmeiras</label>
            <input type="radio" name="voto" id="palmeiras" value="Palmeiras" required>
        </div>

        <div class="escudo">
            <img src="https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/874.png" alt="Corinthians">
            <label for="corinthians">Corinthians</label>
            <input type="radio" name="voto" id="corinthians" value="Corinthians" required>
        </div>

        <div class="escudo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Santos_Logo.png" alt="Santos">
            <label for="santos">Santos</label>
            <input type="radio" name="voto" id="santos" value="Santos" required>
        </div>
            <br><br>
            <input type="submit" id="botaosubmit" name="Enviar">
        </div>
        
    
        </form>





    </div>

</body>
</html>