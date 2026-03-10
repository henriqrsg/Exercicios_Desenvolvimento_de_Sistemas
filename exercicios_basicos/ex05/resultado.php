<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 5</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex05 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $idade = $_POST['idade'];

    if ($idade >= 18):
        echo('Você é maior de idade!');
    else:
        echo('Você é menor de idade!');
    endif;

    ?>

</body>
</html>
