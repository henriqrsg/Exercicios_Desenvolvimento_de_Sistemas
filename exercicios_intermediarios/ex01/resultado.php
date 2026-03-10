<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 01</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex01 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operacao = $_POST['operacao'];

    if ($operacao == '+'):
        echo('O valor da soma entre os números ' . $n1 . ' e ' . $n2 . ' é de: ' . $n1 + $n2);
    elseif ($operacao == '-'):
        echo('O valor da subtração entre os números ' . $n1 . ' e ' . $n2 . ' é de: ' . $n1 - $n2);
    elseif ($operacao == 'x'):
        echo('O valor da multiplicação entre os números ' . $n1 . ' e ' . $n2 . ' é de: ' . $n1 * $n2);
    elseif ($operacao == '/'):
        if ($n2 == 0):
            echo('Não é possível fazer divisão por zero!');
        else:
            echo('O valor da divisão entre os números ' . $n1 . ' e ' . $n2 . ' é de: ' . $n1 / $n2);
        endif;
    else:
        echo('Esta operação não existe!');
    endif;
    ?>

</body>
</html>