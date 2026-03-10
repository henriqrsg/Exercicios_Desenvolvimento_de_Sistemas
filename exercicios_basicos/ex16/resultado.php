<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 16</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex16 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $n = $_POST['n'];
    $msg = $_POST['msg'];
    $c = 0;

    do {
        echo('msg <br>');
        $c ++;
    } while ($c < $n);

    ?>

</body>
</html>