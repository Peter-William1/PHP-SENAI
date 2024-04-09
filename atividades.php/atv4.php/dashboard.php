<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboardstyle.css">
    <title>Dashboard</title>
</head>
<body>
    <?php 
        session_start();

        if ($_SESSION['conectado']!=1){
            header("Location: index.php");
        }



    ?>
    <nav>
        <span>Olá, <?php echo $_SESSION['usuario']?></span><a href="logout.php">Sair</a>
        
    </nav>


    
</body>
</html>