<?php
    session_start();

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include 'conexao.php';

        $usuario = $_POST['usuario'];
        $senha = md5($_POST['senha']);

        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            $_SESSION['usuario_id'] = $user->id;
            $_SESSION['usuario'] = $user->usuario;
            header('Location: index.php');
            exit;
        } else {
            $erro = "Usuário ou senha inválidos.";
        }
    }
?>
<!-- Framework utilizado: Bootstrap 5 — https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — To-Do List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f2f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
        }
        .btn-dark {
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-5 col-lg-4">

            <div class="card p-4">
                <div class="text-center mb-4">
                    <h2 class="fw-bold mb-1">✅ To-Do List</h2>
                    <p class="text-muted small">Faça login para continuar</p>
                </div>

                <?php if ($erro): ?>
                    <div class="alert alert-danger py-2 text-center small"><?php echo $erro; ?></div>
                <?php endif; ?>

                <form action="login.php" method="post">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Usuário</label>
                        <input type="text" name="usuario" class="form-control" placeholder="Digite seu usuário" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Senha</label>
                        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
                    </div>

                    <button type="submit" class="btn btn-dark w-100">Entrar</button>

                </form>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
