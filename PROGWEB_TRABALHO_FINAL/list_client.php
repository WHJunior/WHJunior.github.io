<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include 'db.php';

$database = new Database();
$conn = $database->getConnection();

$search = $_GET['search'] ?? '';

// Buscar clientes do banco de dados
$stmt = $conn->prepare("SELECT * FROM clients WHERE nome ILIKE ?");
$stmt->execute(["%$search%"]);
$clients = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="list-client-container">
        <form action="list_client.php" method="get">
            <input type="text" name="search" placeholder="Buscar por nome" value="<?php echo htmlspecialchars($search); ?>">
            <button type="submit">Buscar</button>
        </form>
        </br>
        <div class="acoes">
            <a href="register_client.php" class="btn-incluir">Incluir</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($client['nome']); ?></td>
                        <td><?php echo htmlspecialchars($client['sobrenome']); ?></td>
                        <td><?php echo htmlspecialchars($client['data_nascimento']); ?></td>
                        <td><?php echo htmlspecialchars($client['email']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>