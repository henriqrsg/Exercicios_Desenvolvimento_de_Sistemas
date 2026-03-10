<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 02</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex02 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $n = $_GET['n'];;

    if ($n % 2 == 0):
        echo('O número ' . $n . ' é par');
    else:
        echo('O número ' . $n . ' é ímpar');
    endif;

    if ($n > 0):
        echo(' e é positivo!');
    elseif ($n == 0):
        echo(' e não é positivo nem negativo!');
    else:
        echo(' é negativo!');
    endif;
    ?>

</body>
</html>