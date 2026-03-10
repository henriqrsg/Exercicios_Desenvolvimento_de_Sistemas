<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 9</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex09 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php
    
    $ni= $_POST['ni'];
    $nf= $_POST['nf'];
    $q = $_POST['q'];

    for ($ni; $ni <= $nf; $ni += $q )
        echo($ni . '<br>');
    ?>

</body>
</html>