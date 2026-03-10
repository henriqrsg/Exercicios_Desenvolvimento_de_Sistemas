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
    <title>Document</title>
</head>
<body>
    <table width= "100%" border= '1'>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data Criação</th>
            <th>Quantidade de Títulos</th>
        </tr>

        <?php
            while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) {
        ?>
            <tr>
                <td><?php echo $linha->id ?></td>
                <td><?php echo $linha->nome ?></td>
                <td><?php echo $linha->data_criacao ?></td>
                <td><?php echo $linha->quant_titulos ?></td>
            </tr>
        <?php
            }        
        ?>
    </table>

</body>
</html>