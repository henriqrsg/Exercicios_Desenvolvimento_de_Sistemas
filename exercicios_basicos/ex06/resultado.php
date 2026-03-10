<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 6</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex06 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $numero = $_POST['numero'];

    if ($numero > 0):
        echo('O número ' . $numero . ' é positivo! ');
    elseif ($numero == 0):
        echo('O número ' . $numero . ' não é positivo nem negativo! ');
    else:
        echo('O número ' . $numero . ' é negativo! ');
    endif;

    ?>

</body>
</html>