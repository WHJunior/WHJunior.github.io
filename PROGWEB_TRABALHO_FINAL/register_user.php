<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Cadastro de Usuário</h2>
        <form action="process_register_user.php" method="post">
            <label for="username">Nome:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email">
            <button type="submit" name="action" value="register_user">Registrar</button>
        </form>
    </div>
</body>
</html>