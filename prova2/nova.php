<?php
    include 'sessao.php';
    include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];

        $stmt = $conexao->prepare("INSERT INTO tarefas (titulo, descricao, usuario_id) VALUES (?,?,?)");
        $stmt->execute([$titulo, $descricao, $_SESSION['usuario_id']]);

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
                <h4 class="fw-bold mb-0">Nova Tarefa</h4>
            </div>

            <div class="card border-0 shadow-sm rounded-4 p-4">
                <form action="nova.php" method="post">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Título <span class="text-danger">*</span></label>
                        <input type="text" name="titulo" class="form-control" placeholder="Ex: Estudar para a prova" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Descrição</label>
                        <textarea name="descricao" class="form-control" rows="4" placeholder="Descreva sua tarefa..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-dark w-100">Salvar Tarefa</button>

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
