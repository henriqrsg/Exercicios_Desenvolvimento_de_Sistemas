<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 17</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex17 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $numero = $_POST['numero'];

    while ($numero == 1){
        header("Location: index.php");
        exit();
    }
    echo('Obrigado por usar o programa! ');

    ?>

</body>
</html>