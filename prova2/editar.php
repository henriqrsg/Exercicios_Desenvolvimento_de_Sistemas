<?php
    include 'sessao.php';
    include 'conexao.php';

    $id = $_GET['id'];

    // Busca a tarefa no banco
    $sql = "SELECT * FROM tarefas WHERE id = :id AND usuario_id = :usuario_id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':usuario_id', $_SESSION['usuario_id']);
    $stmt->execute();
    $tarefa = $stmt->fetch(PDO::FETCH_OBJ);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulo    = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $status    = $_POST['status'];

        $sql = "UPDATE tarefas SET titulo = :titulo, descricao = :descricao, status = :status WHERE id = :id AND usuario_id = :usuario_id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':usuario_id', $_SESSION['usuario_id']);
        $stmt->execute();

        header('Location: index.php');
        exit;
    }
?>

<?php include 'layout.php'; ?>

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-12 col-md-7 col-lg-6">

            <div class="d-flex align-items-center mb-4 gap-3">
                <a href="index.php" class="btn btn-outline-secondary btn-sm">← Voltar</a>
                <h4 class="fw-bold mb-0">Editar Tarefa</h4>
            </div>

            <div class="card border-0 shadow-sm rounded-4 p-4">
                <form action="editar.php?id=<?php echo $tarefa->id; ?>" method="post">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Título <span class="text-danger">*</span></label>
                        <input type="text" name="titulo" class="form-control" value="<?php echo $tarefa->titulo; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Descrição</label>
                        <textarea name="descricao" class="form-control" rows="4"><?php echo $tarefa->descricao; ?></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Status</label>
                        <select name="status" class="form-select">
                            <option value="pendente" <?php echo ($tarefa->status === 'pendente') ? 'selected' : ''; ?>>Pendente</option>
                            <option value="concluida" <?php echo ($tarefa->status === 'concluida') ? 'selected' : ''; ?>>Concluída</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-dark w-100">Salvar Alterações</button>

                </form>
            </div>

        </div>
    </div>

</div>

<footer>
    <p class="mb-0">&copy; <?php echo date('Y'); ?> — Sistema de Tarefas To-Do List</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
