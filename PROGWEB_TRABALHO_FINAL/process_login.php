<?php
session_start();
include 'db.php';
include_once 'User.php';

$db = (new Database())->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == 'login') {
    $user = new User($db);
    $user->username = $_POST['username'];
    $user->password = $_POST['password'];
    if ($user->login()) {
        $_SESSION['user_id'] = $user->id;
        header('Location: list_client.php');
    } else {
        header('Location: login.php?error=invalid_credentials');
    }
}
?>