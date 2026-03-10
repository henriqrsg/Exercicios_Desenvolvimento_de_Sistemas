<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 23</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex23 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $palavra = $_POST['palavra'];
    $vogais = 0;

    for ($c = 0; $c < strlen($palavra); $c++){
        if(strtoupper($palavra[$c]) == 'A' || strtoupper($palavra[$c]) == 'E' || strtoupper($palavra[$c]) == 'I' || strtoupper($palavra[$c]) == 'O' || strtoupper($palavra[$c]) == 'U'):
            $vogais++;
        endif;
    }

    echo('A palavra ' . $palavra . ' tem ' . $vogais . ' vogais!')

    ?>

</body>
</html>