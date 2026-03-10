<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 7</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex07 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $numero = $_POST['numero'];

    if ($numero % 2 == 0):
        echo('O número '. $numero . ' é um número par!');
    else:
        echo('O número '. $numero . ' é um número ímpar!');
    endif;

    ?>

</body>
</html>