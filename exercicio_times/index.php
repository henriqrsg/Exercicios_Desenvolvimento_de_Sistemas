<?php

    include 'conexao.php';

    $sql = 'SELECT * FROM times';
    $consulta = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times de Futebol</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <form action="inserir.php" method='post'>
        <table width="100%" border= '1'>
            <tr>
                <th colspan='4'>CADASTRANDO TIME</th>
            </tr>
            <tr>
                <th>Nome</th>
                <th>Data de Criação</th>
                <th>Quantidade de Títulos</th>
                <th rowspan='2'><input type="submit" value="Salvar" center></th>
            </tr>
            <tr>
                <td><input type="text" name="nome" style="width:96%" center></td>
                <td><input type="date" name="data_criacao" style="width:96%" center></td>
                <td><input type="number" name="quant_titulos" style="width:96%" center required></td>
            </tr>
        </table>
    </form>

    <br>

    <table width= "100%" border= '1'>
        <tr>
            <th colspan='5'>INFORMAÇÕES</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data Criação</th>
            <th>Quantidade de Títulos</th>
            <th>Ações</th>
        </tr>

        <?php
            while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) {
        ?>
            <tr>
                <td><?php echo $linha->id ?></td>
                <td><?php echo $linha->nome ?></td>
                <td><?php echo $linha->data_criacao ?></td>
                <td><?php echo $linha->quant_titulos ?></td>
                <td><a href="excluir.php?id=<?php echo $linha->id ?>">Excluir</a></td>
            </tr>
        <?php
            }        
        ?>
    </table>

</body>
</html>