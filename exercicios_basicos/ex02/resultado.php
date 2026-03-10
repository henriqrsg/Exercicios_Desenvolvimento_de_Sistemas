<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 2</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex02 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $som = $n1 + $n2;
    if ($n1 >= $n2):
        $sub = $n1 - $n2;;
    else:
        $sub = $n2 - $n1;;
    endif;

    $mul = $n1 * $n2;
    $div = $n1 / $n2;

    echo('A soma entre os números digitados é: ' . $som . '<br>');
    echo('A subtração entre os números digitados é: ' . $sub . '<br>');
    echo('A multiplicação entre os números digitados é: ' . $mul . '<br>');
    echo('A divisão entre os números digitados é: ' . number_format($div,2) . '<br>');

    ?>

</body>
</html>