<?php
session_start();

if (!isset($_SESSION['produtos'])) {
    
    $produtos = [
        [
            'id' => '1', 'nome' => 'Gabinete PC', 'descricao' => "Gabinete ATX para computador, espaçoso e eficientemente ventilado. Ideal para uma experiência de montagem simples e flexível na sua loja de informática.", 'preco' => '500', 'img' => 'imagens/gabinete-pc.png', 'quantidade' => '1', 'precototal' => '500'
        ],
        [
            'id' => '2', 'nome' => 'Impressora', 'descricao' => "Impressora Multifuncional: Versátil, compacta e eficiente. Alta resolução para resultados profissionais. Conectividade moderna para impressão sem fio. Ideal para escritórios e uso doméstico.", 'preco' => '650', 'img' => 'imagens/impressora.png', 'quantidade' => '1', 'precototal' => '650'
        ],
        [
            'id' => '3', 'nome' => 'Memória RAM Notebook', 'descricao' => "
            Memória RAM Hyper para notebooks: a solução ideal para impulsionar o desempenho do seu laptop.  Oferece uma atualização simples e eficaz para uma experiência mais rápida e responsiva.", 'preco' => '100', 'img' => 'imagens/memoria-ram-notebook.png', 'quantidade' => '1', 'precototal' => '100'
        ],
        [
            'id' => '4', 'nome' => 'Monitor PC', 'descricao' => "Monitor ViewTech, a escolha definitiva para uma experiência visual excepcional. Com uma tela de alta resolução e tecnologia de última geração.", 'preco' => '700', 'img' => 'imagens/monitor-pc.png', 'quantidade' => '1', 'precototal' => '700'
        ],
        [
            'id' => '5', 'nome' => 'Mouse', 'descricao' => "
            Mouse CrowGlide, a escolha ideal para aumentar sua produtividade e precisão. Com um design ergonômico e confortável, reduzindo a fadiga durante longas sessões de uso.", 'preco' => '50', 'img' => 'imagens/mouse.png', 'quantidade' => '1', 'precototal' => '50'
        ],
        [
            'id' => '6', 'nome' => 'Notebook', 'descricao' => "Featherbook, sua solução completa para produtividade e entretenimento em movimento. Equipado com um processador potente e uma memória expansível, oferece desempenho ágil e responsivo .", 'preco' => '2500', 'img' => 'imagens/notebook.png', 'quantidade' => '1', 'precototal' => '2500'
        ],
        [
            'id' => '7', 'nome' => 'Placa-mãe', 'descricao' => "Placa Mãe RavenNest. Com suporte para os mais recentes processadores e tecnologias de armazenamento, esta placa mãe oferece uma base sólida para construir o seu PC dos sonhos.", 'preco' => '450', 'img' => 'imagens/placa-mae.png', 'quantidade' => '1', 'precototal' => '450'
        ],
        [
            'id' => '8', 'nome' => 'Smartphone', 'descricao' => "Smartphone Fitera, o seu essencial para estar conectado e produtivo onde quer que vá. Com um design elegante e ergonômico,oferecendo conforto e praticidade em cada uso.", 'preco' => '2000', 'img' => 'imagens/smartphone.png', 'quantidade' => '1', 'precototal' => '2000'
        ],
        [
            'id' => '9', 'nome' => 'Tablet', 'descricao' => "Tablet CorvusGO. Com um design fino e leve, este tablet é perfeito para uso em movimento, oferecendo portabilidade e conveniência incomparáveis.", 'preco' => '1200', 'img' => 'imagens/tablet.png', 'quantidade' => '1', 'precototal' => '1200'
        ],
        [
            'id' => '10', 'nome' => 'Teclado', 'descricao' =>"Teclado CRW. Com um design ergonômico e teclas macias e responsivas, este teclado proporciona uma experiência de digitação suave e confortável.", 'preco' => '40', 'img' => 'imagens/teclado.png', 'quantidade' => '1', 'precototal' => '40'
        ]
    ];
    $_SESSION['produtos'] = $produtos;
}

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    
    <link rel='stylesheet' href='styles/index.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap' rel='stylesheet'>



    <title>Document</title>
</head>
<header>
     <div class=titulo><a href='index.php'><img src='imagens/corvo.png'> <p> CrowTEC</p></a>  </div> <!--PARTE DO HEADER -->
    <div class='nav'>
        <a href='cart.php'>
            
            <div class='circulo'>  <!-- desenha a quantidade de produtos no carrinho -->
                <?php     
                    if (!isset($_SESSION['quantcarrinho'])) {
                    
                        $_SESSION['quantcarrinho']=0;
                    }

                    echo $_SESSION['quantcarrinho'];
                ?>  
            </div>
            <div class='carrinho'> <img src='imagens/carrinho.png' alt='' > </div>
        </a>
    </div>
</header>
<body>
    <h1>PRODUTOS:</h1>
    <div class='container'>
   
        <?php
            foreach ($_SESSION['produtos'] as $valor) { //IMPRIME OS PRODUTOS NO INDEX
                echo "
                    
                        
                        <div class='content'>
                            <div class='produto'><img src='$valor[img]' alt=''><h2>$valor[nome]</h2><p>$valor[descricao]</p><h4>R$:$valor[preco]</h4><form method='GET' action='comprar.php'><input type='hidden' name='idproduto' value='$valor[id]'><input type='submit' value='COMPRAR'></form></div>   
                        </div>
                   
                ";
            }
        ?>
    </div>
</body>
</html>
