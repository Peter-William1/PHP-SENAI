<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "biblioteca";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");

// Array de livros
$livros = array(
    array("titulo" => "Dom Casmurro", "autor" => "Machado de Assis", "ano" => 1899),
    array("titulo" => "Memórias Póstumas de Brás Cubas", "autor" => "Machado de Assis", "ano" => 1881),
    array("titulo" => "Grande Sertão: Veredas", "autor" => "Guimarães Rosa", "ano" => 1956),
    array("titulo" => "Vidas Secas", "autor" => "Graciliano Ramos", "ano" => 1938),
    array("titulo" => "Capitães da Areia", "autor" => "Jorge Amado", "ano" => 1937),
    array("titulo" => "O Cortiço", "autor" => "Aluísio Azevedo", "ano" => 1890),
    array("titulo" => "O Guarani", "autor" => "José de Alencar", "ano" => 1857),
    array("titulo" => "A Hora da Estrela", "autor" => "Clarice Lispector", "ano" => 1977),
    array("titulo" => "Memorial de Aires", "autor" => "Machado de Assis", "ano" => 1908),
    array("titulo" => "São Bernardo", "autor" => "Graciliano Ramos", "ano" => 1934),
    // Adicione mais livros aqui...
);

// Insere cada livro no banco de dados
foreach ($livros as $livro) {
    $titulo = mysqli_real_escape_string($conn, $livro['titulo']);
    $autor = mysqli_real_escape_string($conn, $livro['autor']);
    $ano = mysqli_real_escape_string($conn, $livro['ano']);

    $sql = "INSERT INTO `livros` (`titulo`, `autor`, `ano_publicacao`) 
            VALUES ('$titulo', '$autor', '$ano')";

    if (mysqli_query($conn, $sql)) {
        echo "Novo registro criado com sucesso para: " . $livro['titulo'] . "<br>";
    } else {
        echo "Erro ao inserir registro para: " . $livro['titulo'] . "<br>" . mysqli_error($conn) . "<br>";
    }
}

// Resetar auto-incremento do ID
$sql_reset_auto_increment = "ALTER TABLE livros AUTO_INCREMENT = 1";
if (mysqli_query($conn, $sql_reset_auto_increment)) {
    echo "O ID auto-incrementado foi resetado.";
} else {
    echo "Erro ao resetar o ID auto-incrementado: " . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: consultar_livros.php");
?>
