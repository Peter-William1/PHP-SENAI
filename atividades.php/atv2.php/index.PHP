<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    
  
    <title>Document</title>
</head>

<body>
    <h1>
        <div class="rainbow-text" style="text-align: center;">
            <div class="rainbow-text" style="text-align: center;">
                <span class="block-line"><span><span style="color:#ff0000;">C</span><span
                            style="color:#ff7700;">A</span><span style="color:#ffee00;">U</span><span
                            style="color:#99ff00;">C</span><span style="color:#26ff00;">U</span><span
                            style="color:#00ff51;">L</span><span style="color:#00ffc8;">E&nbsp;</span></span><span><span
                            style="color:#00c3ff;">S</span><span style="color:#004cff;">E</span><span
                            style="color:#2a00ff;">U&nbsp;</span></span><span><span style="color:#9d00ff;">I</span><span
                            style="color:#ff00ea;">M</span><span style="color:#ff0073;">C</span></span></span>
            </div>
        </div>
    </h1>
    <div class='placa'>
        <div class='janelas'>
            <div class="content">
                <header>INSIRA VALORES<button>X</button></header>
                <form action="" method="post">
                    PESO: <br><input type="text" name="Valor1"><br>
                    ALTURA: <br><input type="text" name="Valor2"><br>
                    <button function="submit">Caucular</button>
                </form>
            </div>

            <div class="conten">
                <header>INSIRA VALORES<button>X</button></header>
                <form action="" method="post">
                    PESO: <br><input type="text" name="Valor1"><br>
                    ALTURA: <br><input type="text" name="Valor2"><br>
                    <button function="submit">Caucular</button>
                </form>
            </div>

            <div class="conten1">
                <header>INSIRA VALORES<button>X</button></header>
                <form action="" method="post">
                    PESO: <br><input type="text" name="Valor1"><br>
                    ALTURA: <br><input type="text" name="Valor2"><br>
                    <button function="submit">Caucular</button>
                </form>
            </div>

            <div class="conten2">
                <header>INSIRA VALORES<button>X</button></header>
                <form action="" method="post">
                    PESO: <br><input type="text" name="Valor1"><br>
                    ALTURA: <br><input type="text" name="Valor2"><br>
                    <button id="botao" function="submit">Caucular</button>
                </form>
            </div>
        </div>
        <div class='box'>
            <header>Comentários</header>
            <div id="textoAnimado" class="text">

                
                <?php   
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
                        $peso=$_POST["Valor1"]; $altura=$_POST["Valor2"]; 
                        $imc = ($peso/ ($altura * $altura));

                        if ($imc > 18.5 && $imc <= 24.9) {
                                $situacao = "normal";
                        } else if ($imc >= 25 && $imc <= 29.9) {
                                $situacao = "Sobrepeso";
                        } else if ($imc >= 30) {
                                $situacao = "Obesidade";
                        } else {
                                $situacao = "Abaixo do peso";
                        }



                        $imc = 
                        round($imc, 2);
                        echo "Seu IMC é:$imc, seu estado de saude é:$situacao" ;
                        
                        }
                    ?>
           






            </div>
            <div class="comment"><img src="cachorro.png" alt="">
    
            
        </div>
        
       
    

       

    </div>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR71W6TRCiivt6t6EbVbN3xjvaLJy21VWwHeg&usqp=CAU" alt="">
    <div class="osaker">
        <img src="https://i.ytimg.com/vi/TY8A5ExJVns/maxresdefault.jpg" alt="">
    </div>                    
</body>
<script src="script.js"></script>
</html>