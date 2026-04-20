<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

    <div class="login-container">
        <form action="logar.php" method="post">
            <h2>Login</h2>

            <label>E-mail:</label>
            <input type="email" name="email" required placeholder="Digite seu e-mail">

            <label>Senha:</label>
            <input type="password" name="senha" required placeholder="Digite sua senha">

            <input type="submit" value="Entrar">
            <input type="reset" value="Limpar">
        </form>
    </div>

</body>
</html>