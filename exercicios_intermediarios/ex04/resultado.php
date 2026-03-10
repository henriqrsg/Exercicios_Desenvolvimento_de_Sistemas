<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 04</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex04 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $nome = $_POST['nome'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $media = ($n1 + $n2 + $n3) / 3;

    if ($media >= 7):
        $situacao = 'Aprovado';
    elseif ($media >= 5 and $media < 7):
        $situacao = 'Recuperação';
    else:
        $situacao = 'Reprovado';
    endif;

    echo('Nome do aluno: ' . $nome . '<br>');
    echo('Média do aluno: ' . round($media,2) . '<br>');
    echo('Situação: ' . $situacao);

    ?>

</body>
</html>