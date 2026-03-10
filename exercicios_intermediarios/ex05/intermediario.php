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
    
    <form method= 'post' action= 'resultado.php'>
    <?php

    $quantidade = $_POST['quantidade'];

    for ($c = 1; $c <= $quantidade; $c++){
        echo ('Pessoa ' . $c . '<br><br>');

        echo "Nome: <input type='text' name='nomes[]'><br><br>";
        echo "Idade: <input type='number' name='idades[]'><br><br>";
    }

    ?>

    <input type="submit" value="Verificar">

    </form>


</body>
</html>