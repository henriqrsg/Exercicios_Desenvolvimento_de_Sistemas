<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 15</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex15 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php
    
    $senha_correta= 'abcd123';
    $senha= $_POST['senha'];

    while ($senha != $senha_correta) {
        header("Location: index.php");
        exit();
    }
    echo('SENHA CORRETA! <br>');
    echo('Login bem sucedido!');

     ?>

</body>
</html>