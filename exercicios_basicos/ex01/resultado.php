<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 1</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex01 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $idade = $_POST['idade'];
    $nome = $_POST['nome'];
    $altura = $_POST['altura'];

    echo('Idade: ' . $idade . '<br>');
    echo('nome: ' . $nome . '<br>');
    echo('altura: ' . $altura . '<br>');

?>

</body>
</html>