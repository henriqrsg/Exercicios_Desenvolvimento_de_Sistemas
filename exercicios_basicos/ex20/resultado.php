<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 20</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex20 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $produtos = $_POST['produtos'];
    $precos = $_POST['precos'];
    $c = 0;

    foreach ($produtos as $produto){
        $preco = $precos[$c];
        echo('Produto: ' . $produto . ' ==> Valor: ' . $preco . '<br>');
        $c++;
    }

    ?>

</body>
</html>