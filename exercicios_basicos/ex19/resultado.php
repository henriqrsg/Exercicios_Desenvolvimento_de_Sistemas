<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 19</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex19 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $numeros = $_POST['numeros'];
    $soma = 0;

    foreach ($numeros as $numero) {
        $soma += $numero;
    }

    echo('A soma de todos os números digitados é de: ' . $soma)

    ?>

</body>
</html>