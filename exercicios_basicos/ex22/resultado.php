<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 22</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex22 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

    $inicial = $_POST['inicial'];
    $final = $_POST['final'];

    for ($inicial; $inicial <= $final; $inicial++){
        if($inicial % 2 == 0):
            if($inicial == $final or $inicial == $final-1):
                echo($inicial . '  ');
            else:
                echo($inicial . ',  ');
            endif;
        endif;
    }

    ?>

</body>
</html>