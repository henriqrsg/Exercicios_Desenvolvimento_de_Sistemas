<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 3</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex03 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $temperatura_celsius = $_POST['temperatura_celsius'];

    $temperatura_fahrenheit = $temperatura_celsius * 1.8 + 32;

    echo('A temperatura de ' . $temperatura_celsius . ' ºC convertido para fahrenheit é de ' . $temperatura_fahrenheit . ' ºF');

    ?>

</body>
</html>