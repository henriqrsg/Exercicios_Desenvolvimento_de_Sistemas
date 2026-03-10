<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 18</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex18 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $nomes = $_POST['nomes'];
    $c = 1;

    foreach ($nomes as $nome) {
        echo('Nome ' . $c . ': ' . $nome . '<br>');
        $c ++;
    }

    ?>

</body>
</html>