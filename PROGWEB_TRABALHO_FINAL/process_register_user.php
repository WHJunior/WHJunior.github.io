<?php
include 'db.php';
include_once 'User.php';

$db = (new Database())->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == 'register_user') {
    $user = new User($db);
    $user->username = $_POST['username'];
    $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password
    $user->email = $_POST['email'];
    if ($user->register()) {
        // Usuário cadastrado com sucesso
        header('Location: login.php?registration_success');
    } else {
        // Erro no cadastro
        header('Location: register_user.php?registration_failed');
    }
}
?>