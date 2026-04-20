<?php
    include '../sessao.php';
    include '../conexao.php';

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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="top-bar">
        <span>👋 Bem vindo, <?php echo $_SESSION['email']; ?></span>
        <a href="../logout.php" class="btn-logout">Sair do Sistema</a>
    </div>

    <div class="dashboard-container">
        
        <div class="table-wrapper">
            <form action="inserir.php" method='post'>
                <input type="hidden" name="id" value="<?php echo (isset($times)) ? $times->id : '' ?>">
                
                <table>
                    <tr>
                        <th colspan='4'>⚽ Cadastrar / Editar Time</th>
                    </tr>
                    <tr>
                        <td>
                            <label>Nome do Time</label><br>
                            <input value="<?php echo (isset($times)) ? $times->nome : '' ?>" type="text" name="nome" required>
                        </td>
                        <td>
                            <label>Data de Criação</label><br>
                            <input value="<?php echo (isset($times)) ? $times->data_criacao : '' ?>" type="date" name="data_criacao" required>
                        </td>
                        <td>
                            <label>Qtd. Títulos</label><br>
                            <input value="<?php echo (isset($times)) ? $times->quant_titulos : '' ?>" type="number" name="quant_titulos" required>
                        </td>
                        <td style="vertical-align: bottom;">
                            <input type="submit" value="Salvar" style="width: 100%;">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="table-wrapper">
            <table>
                <tr>
                    <th colspan='4'>INFORMAÇÕES REGISTRADAS</th>
                    <th colspan='2' style="text-align: center;">AÇÕES</th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data Criação</th>
                    <th>Quantidade de Títulos</th>
                    <th style="text-align: center;">Editar</th>
                    <th style="text-align: center;">Excluir</th>
                </tr>

                <?php while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) { ?>
                    <tr>
                        <td>#<?php echo $linha->id ?></td>
                        <td><strong><?php echo $linha->nome ?></strong></td>
                        <td><?php echo date('d/m/Y', strtotime($linha->data_criacao)) ?></td>
                        <td><?php echo $linha->quant_titulos ?> 🏆</td>
                        <td style="text-align: center;">
                            <a class="action-link edit" href="index.php?id=<?php echo $linha->id ?>">Editar</a>
                        </td>
                        <td style="text-align: center;">
                            <a class="action-link delete" href="excluir.php?id=<?php echo $linha->id ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </div>

    <footer class="rodape">
        <div class="rodape-conteudo">
            <p>&copy; <?php echo date('Y'); ?> - Sistema de Cadastro de Times</p>
            <p>Desenvolvido por Luiz</p>
        </div>
    </footer>

</body>
</html>