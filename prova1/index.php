<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando nota de aluno</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex04</h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <form method = 'post' action = 'resultado.php'>

    -------------------SISTEMA DE NOTAS--------------------<br><br>

    Digite o nome do aluno: <input type= 'string' name= 'nome'/><br><br>
    Digite a 1ª nota do aluno: <input type= 'number' name= 'n1' min='0' max='10' step ='0.1' required/><br><br>
    Digite a 2ª nota do aluno: <input type= 'number' name= 'n2' min='0' max='10' step ='0.1' required/><br><br>
    Digite a 3ª nota do aluno: <input type= 'number' name= 'n3' min='0' max='10' step ='0.1' required/><br><br>

        <input type = 'submit' value = 'Calcular média do aluno' /> 

    <form>

</body>
</html>