<?php
    include 'sessao.php';
    include 'conexao.php';

    $sql = "SELECT * FROM tarefas WHERE usuario_id = :usuario_id ORDER BY id DESC";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':usuario_id', $_SESSION['usuario_id']);
    $stmt->execute();
?>

<?php include 'layout.php'; ?>

<div class="container py-5">

    <div class="d-flex align-items-center justify-content-between mb-4">
        <h4 class="fw-bold mb-0">Minhas Tarefas</h4>
        <a href="nova.php" class="btn btn-dark btn-sm px-4">+ Nova Tarefa</a>
    </div>

    <div class="card border-0 shadow-sm rounded-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Título</th>
                        <th>Status</th>
                        <th>Data de Criação</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($tarefa = $stmt->fetch(PDO::FETCH_OBJ)): ?>
                    <tr>
                        <td class="fw-semibold"><?php echo $tarefa->titulo; ?></td>
                        <td>
                            <?php if ($tarefa->status === 'concluida'): ?>
                                <span class="badge rounded-pill bg-success">Concluída</span>
                            <?php else: ?>
                                <span class="badge rounded-pill bg-warning text-dark">Pendente</span>
                            <?php endif; ?>
                        </td>
                        <td class="text-muted small"><?php echo date('d/m/Y', strtotime($tarefa->data_criacao)); ?></td>
                        <td class="text-center">
                            <a href="editar.php?id=<?php echo $tarefa->id; ?>" class="btn btn-outline-secondary btn-sm">Editar</a>
                            <a href="concluir.php?id=<?php echo $tarefa->id; ?>" class="btn btn-outline-success btn-sm">Concluir</a>
                            <a href="excluir.php?id=<?php echo $tarefa->id; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Deseja excluir esta tarefa?');">Excluir</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<footer>
    <p class="mb-0">&copy; <?php echo date('Y'); ?> — Sistema de Tarefas To-Do List</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
