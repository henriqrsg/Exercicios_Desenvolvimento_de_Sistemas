<!-- Framework utilizado: Bootstrap 5 — https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 1px;
        }
        .badge-pendente {
            background-color: #ffc107;
            color: #212529;
        }
        .badge-concluida {
            background-color: #198754;
            color: #fff;
        }
        footer {
            background-color: #212529;
            color: #adb5bd;
            padding: 18px 0;
            margin-top: 60px;
            text-align: center;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php">✅ To-Do List</a>
        <div class="d-flex align-items-center gap-3">
            <span class="text-white-50 small">👤 <?php echo $_SESSION['usuario']; ?></span>
            <a href="logout.php" class="btn btn-outline-light btn-sm">Sair</a>
        </div>
    </div>
</nav>
