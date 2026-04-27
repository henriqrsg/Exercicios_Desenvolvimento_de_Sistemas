<?php
    include 'sessao.php';
    include 'conexao.php';

    $id = $_GET['id'];

    $sql = "UPDATE tarefas SET status = 'concluida' WHERE id = :id AND usuario_id = :usuario_id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':usuario_id', $_SESSION['usuario_id']);
    $stmt->execute();

    header('Location: index.php');
    exit;
?>
