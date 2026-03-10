<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 03</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex03 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>

    -------------------TABUADA--------------------<br><br>
    
    <?php

    $n = $_POST['n'];

    for($c=1; $c <= 10; $c++){
        echo($n . ' x ' . $c . ' = ' . $n * $c . '<br>');
    }

    ?>

</body>
</html>