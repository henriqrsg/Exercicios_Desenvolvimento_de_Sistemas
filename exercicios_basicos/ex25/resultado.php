<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 25</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex25 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

        $saque = $_POST['saque'];
        $saldo = 67.43;

        if ($saque > $saldo):
            echo('Saldo insuficiente para operação! <br> Você so possui: R$ ' . $saldo . '<br>');
            echo " <a href='index.php'>Voltar</a>";
        else:
            $novo_saldo = $saldo - $saque;
            echo('Saque feito! Seu novo saldo é de: ' . $novo_saldo);
        endif;

    ?>

</body>
</html>