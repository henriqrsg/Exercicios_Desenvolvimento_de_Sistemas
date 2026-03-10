<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Básicos - 20</title>
</head>
<body>
    
<header>

    <h1>Exercícios Básicos - ex20 </h1>
    <p>Aluno: Luiz Henrique Romualdo da Silva Guedes <br> RA: 22507923</p>
    <hr>

</header>
    
    <form method = 'post' action = 'resultado.php'>

        ----------LISTA DE PRODUTOS----------<br><br>

        Produto 1: <input type= 'text' name= 'produtos[]'/>
        Preço: <input type= 'float' name= 'precos[]'/><br><br>
        Produto 2: <input type= 'text' name= 'produtos[]'/>
        Preço: <input type= 'float' name= 'precos[]'/><br><br>
        Produto 3: <input type= 'text' name= 'produtos[]'/>
        Preço: <input type= 'float' name= 'precos[]'/><br><br>
        Produto 4: <input type= 'text' name= 'produtos[]'/>
        Preço: <input type= 'float' name= 'precos[]'/><br><br>
        Produto 5: <input type= 'text' name= 'produtos[]'/>
        Preço: <input type= 'float' name= 'precos[]'/><br><br>

        <input type = 'submit' value = 'Salvar Produtos' /> 

    <form>

</body>
</html>