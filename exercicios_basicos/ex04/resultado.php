<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 4</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex04 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    echo('Nome completo: ' . $nome . ' '. $sobrenome)

    ?>

</body>
</html>