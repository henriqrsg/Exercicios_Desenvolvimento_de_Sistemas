<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 8</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex08 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $resposta = $_POST['resposta'];

    if ($resposta == '+'):
        echo('A soma dos números ' . $n1 . ' e ' . $n2 . ' é de: '. ($n1 + $n2));
    elseif ($resposta == '-'):
        echo('A subtração dos números ' . $n1 . ' e ' . $n2 . ' é de: '. ($n1 - $n2));
    elseif ($resposta == 'x'):
        echo('A multiplicação dos números ' . $n1 . ' e ' . $n2 . ' é de: '. ($n1 * $n2));
    elseif ($resposta == '/'):
        echo('A divisão dos números ' . $n1 . ' e ' . $n2 . ' é de: '. round(($n1 / $n2),2));
    endif;

    ?>

</body>
</html>