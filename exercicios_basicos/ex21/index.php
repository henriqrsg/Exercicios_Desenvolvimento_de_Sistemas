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
    
    <form method = 'post' action = 'resultado.php'>

        ----------LISTA DE ALUNOS----------<br><br>
    
        Aluno 1: <input type= 'text' name= 'alunos[]'>
        Nota: <input type= 'number' name= 'notas[]'><br><br>
        Aluno 2: <input type= 'text' name= 'alunos[]'>
        Nota: <input type= 'number' name= 'notas[]'><br><br>
        Aluno 3: <input type= 'text' name= 'alunos[]'>
        Nota: <input type= 'number' name= 'notas[]'><br><br>
        Aluno 4: <input type= 'text' name= 'alunos[]'>
        Nota: <input type= 'number' name= 'notas[]'><br><br>
        Aluno 5: <input type= 'text' name= 'alunos[]'>
        Nota: <input type= 'number' name= 'notas[]'><br><br>

        <input type = 'submit' value = 'Salvar Notas' /> 

    </form>

</body>
</html>