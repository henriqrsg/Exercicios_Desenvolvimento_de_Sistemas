<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 14</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex14 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php
    
    $numeroi= $_POST['numeroi'];
    $numerof= $_POST['numerof'];
    $soma= 0;

    while ($numeroi <= $numerof) {
        $soma += $numeroi;
        $numeroi ++;
    }

    echo('A soma dos números é de ' . $soma)

     ?>

</body>
</html>