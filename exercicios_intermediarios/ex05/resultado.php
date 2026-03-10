<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 05</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex05 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php


    $nomes = $_POST['nomes'];
    $idades = $_POST['idades'];

    for ($c = 0; $c < count($nomes); $c++) {

    if ($idades[$c] >= 18) {
        $situacao = "Maior de idade";
    } else {
        $situacao = "Menor de idade";
    }

    echo "Nome: " . $nomes[$c] . "<br>";
    echo "Idade: " . $idades[$c] . "<br>";
    echo "Situação: " . $situacao . "<br><br>";
    }

    ?>

</body>
</html>