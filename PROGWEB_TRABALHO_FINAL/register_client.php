<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Cadastro de Cliente</h2>
        <form action="process_register_client.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required></br>
            <label for="nome">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome" required></br>
            <label for="data_nascimento">Data Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" required></br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required></br>
            <button type="submit" name="action" value="register_client">Cadastrar</button>
        </form>
    </div>
</body>
</html>