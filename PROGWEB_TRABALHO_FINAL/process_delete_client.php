<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if (!isset($_GET['codigo']) || !is_numeric($_GET['codigo'])) {
    // Redireciona para a lista de clientes se o código não estiver definido ou não for numérico
    header('Location: list_client.php');
    exit();
}

$clientCodigo = intval($_GET['codigo']); // Converte o código para um inteiro

include 'db.php';
$database = new Database();
$conn = $database->getConnection();

// Preparando a query de exclusão de forma segura
$stmt = $conn->prepare("DELETE FROM clients WHERE codigo = :clientCodigo");
$stmt->bindParam(':clientCodigo', $clientCodigo, PDO::PARAM_INT);
$stmt->execute();

header('Location: list_client.php');
exit();
?>