<?php

    include 'conexao.php';

    $sql = 'SELECT * FROM times';
    $consulta = $conexao->query($sql);

    if (isset($_GET['id'])):
        $id = $_GET['id'];
        $sql = "SELECT * FROM times WHERE id = :id";
        $consultaUp = $conexao->prepare($sql);
        $consultaUp->bindParam(':id', $id);
        $consultaUp->execute();
        $times = $consultaUp->fetch(PDO::FETCH_OBJ);
    endif;

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
        <input type="hidden" name="id" value="<?php echo (isset($times)) ? $times->id : '' ?>">
        <table width="100%" border= '1'>
            <tr>
                <th colspan='4'>CADASTRAR TIME</th>
            </tr>
            <tr>
                <th>Nome</th>
                <th>Data de Criação</th>
                <th>Quantidade de Títulos</th>
                <th rowspan='2'><input type="submit" value="Salvar" center></th>
            </tr>
            <tr>
                <td><input value="<?php echo (isset($times)) ? $times->nome : '' ?>" type="text" name="nome" style="width:96%" center></td>
                <td><input value="<?php echo (isset($times)) ? $times->data_criacao : '' ?>" type="date" name="data_criacao" style="width:96%" center></td>
                <td><input value="<?php echo (isset($times)) ? $times->quant_titulos : '' ?>" type="number" name="quant_titulos" style="width:96%" center required></td>
            </tr>
        </table>
    </form>

    <br>

    <table width= "100%" border= '1'>
        <tr>
            <th colspan='4'>INFORMAÇÕES</th>
            <th colspan='2'>AÇÕES</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data Criação</th>
            <th>Quantidade de Títulos</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>

        <?php
            while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) {
        ?>
            <tr>
                <td><?php echo $linha->id ?></td>
                <td><?php echo $linha->nome ?></td>
                <td><?php echo $linha->data_criacao ?></td>
                <td><?php echo $linha->quant_titulos ?></td>
                <td><a href="index.php?id=<?php echo $linha->id ?>">Editar</a></td>
                <td><a href="excluir.php?id=<?php echo $linha->id ?>">Excluir</a></td>
            </tr>
        <?php
            }        
        ?>
    </table>

    <footer class="rodape">
        <div class="rodape-conteudo">
            <p>&copy; <?php echo date('Y'); ?> - Sistema de Cadastro de Times</p>
            <p>Desenvolvido por Luiz</p>
        </div>
    </footer>

</body>
</html>