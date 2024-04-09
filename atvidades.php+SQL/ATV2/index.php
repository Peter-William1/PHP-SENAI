<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
        font-size:110%;
    }
    table {
        border-collapse: collapse;
    }
    </style>
</head>
<body>
    <table border="1" >
        <thead>
            
                
                    <th onclick="window.location='index.php?ordenar=cod'">Cod</th>    
                    <th onclick="window.location='index.php?ordenar=nome'">Nome</th> 
                    <th onclick="window.location='index.php?ordenar=preco'">Preço</th> 
                    <th onclick="window.location='index.php?ordenar=qntd'">Qntd</th>
                
           
        </thead>
        <tbody>
            <?php
               
           

                $servername = "localhost";
                $username = "root";
                $password = "usbw";
                $dbname = "loja";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }

                mysqli_set_charset($conn, "utf8");

            
               

                

                switch ($_GET['ordenar']){
                    case 'cod':
                        $sql = "SELECT * FROM produtos ORDER BY cod ASC";
                        break;   
                    case 'nome':
                        $sql = "SELECT * FROM produtos ORDER BY nome ASC"; 
                        break; 
                    case 'preco':
                        $sql = "SELECT * FROM produtos ORDER BY preco ASC";  
                        break;
                    case 'qntd':
                        $sql = "SELECT * FROM produtos ORDER BY quantidade ASC";  
                        break;
                    default : 
                        $sql = "SELECT * FROM produtos";
                        break;
                    
                } 
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {$saida[]=$row;
                }
                } else echo "0 results"; 


                
                foreach ($saida as $contato) { 
                        echo "<tr>
                        <td>  $contato[cod]  </td>
                        <td>  $contato[nome]  </td>
                        <td> R$: $contato[preco]  </td>
                        <td>  $contato[quantidade]  </td>
                        </tr>";

                }







                

               
                
                mysqli_close($conn);
            ?>
        </tbody>    

        
    </table>    



</body>
</html>