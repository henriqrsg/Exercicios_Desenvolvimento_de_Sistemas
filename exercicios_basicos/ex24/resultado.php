<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 24</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex24 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $numeros = $_POST['numeros'];
    $maior_numero = $numeros[0];

    for($i = 0; $i < count($numeros); $i++){
        if ($numeros[$i] > $maior_numero):
            $maior_numero = $numeros[$i];
        endif;
    }
    
    echo('O maior número digitado foi o: ' . $maior_numero);

    ?>

</body>
</html>