<?php
include 'db.php';
include_once 'Client.php';

$db = (new Database())->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == 'register_client') {
    $client = new Client($db);
    $client->nome = $_POST['nome'];
    $client->sobrenome = $_POST['sobrenome'];
    $client->data_nascimento = $_POST['data_nascimento'];
    $client->email = $_POST['email'];
    if ($client->register()) {
        header('Location: list_client.php');
    }
}
?>