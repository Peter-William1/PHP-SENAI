<!DOCTYPE html>
<html lang="pt-BR">
<head>
</head>
<body>
 
    
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

    ?>

</body>
</html>