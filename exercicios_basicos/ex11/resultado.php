<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 11</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex11 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php
    
    $numero= $_POST['numero'];
    $c= 1;

    for ($c; $c <= 10; $c ++ )
        echo($numero . ' x ' . $c . ' = ' . $numero * $c . '<br>');
    ?>

</body>
</html>