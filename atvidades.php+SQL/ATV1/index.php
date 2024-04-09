<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
    </style>
</head>
<body>
    <table border="1" >
        <thead>
            
                
                    <th>ID</th>    
                    <th>Nome</th> 
                    <th>Email</th> 
                    <th>Telefone</th>
                
           
        </thead>
        <tbody>
            <?php
                session_start();
           

                $servername = "localhost";
                $username = "root";
                $password = "usbw";
                $dbname = "agenda";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }

                mysqli_set_charset($conn, "utf8");

                $sql = "SELECT * FROM contatos";
                $result = mysqli_query($conn, $sql);


                

                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {$saida[]=$row;
                }
                } else echo "0 results"; 


                
                foreach ($saida as $contato) { 
                        echo "<tr>
                        <td>  $contato[id]  </td>
                        <td>  $contato[nome]  </td>
                        <td>  $contato[email]  </td>
                        <td>  $contato[telefone]  </td>
                        </tr>";

                }
                


                
                mysqli_close($conn);
            ?>
        </tbody>    

        <a href="ordernarname.php"><button>Ordernar por nome </button></a>
        <a href="index.php"><button>Ordernar por id</button></a>
    </table>    



</body>
</html>