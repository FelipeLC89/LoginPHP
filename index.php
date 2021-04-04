<?php
    session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Banco De Dados</title>
</head>
<body>
    <a href="logout.php">SAIR</a>
    <h1>Página Principal</h1>

    <br>
   <h3> Olá, <?php echo $user_data['user_name']; ?>, tudo bem?</h3>
</body>
</html>