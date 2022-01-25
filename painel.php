<?php
   include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bem-vindo ao Painel</h1>
    <?php echo "Bem-vindo " .$_SESSION['nome']?>
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>