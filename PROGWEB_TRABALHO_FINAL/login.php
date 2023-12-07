<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form action="process_login.php" method="post">
            <label for="username">Usuário</label>
            <input type="text" name="username" id="username" required><br>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" required><br>
            <button type="submit" name="action" value="login">Entrar</button>
        </form>
        <p class="link-container">Ainda não tem uma conta? <a href="register_user.php">Cadastre-se</a></p>
        <?php 
            if (isset($_GET['error'])) {
                echo "<p class=\"error-message\">Credenciais inválidas</p>";
            } else if(isset($_GET['registration_success'])) {
                echo "<p class=\"success-message\">Cadastro realizado com sucesso.</p>";
            } else if(isset($_GET['registration_failed'])) {
                echo "<p class=\"error-message\">O cadastro falhou.</p>";
            }
        ?>
    </div>
</body>
</html>