<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 21</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex21 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <?php

        $alunos = $_POST['alunos'];
        $notas = $_POST['notas'];
        $c = 0;

        foreach ($alunos as $aluno){

            $nota = $notas[$c];

            if ($nota >= 7):
                $resultado = "Aprovado!";
            else:
                $resultado = "Reprovado!";
            endif;

            $c ++;

        echo "Aluno(a): $aluno | Nota: $nota | Resultado: $resultado <br>";
        }

    ?>

</body>
</html>