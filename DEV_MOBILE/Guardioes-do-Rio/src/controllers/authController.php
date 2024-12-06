<?php
require_once __DIR__ . '/../models/User.php';

class AuthController {
    private $userModel;

    public function __construct($db) {
        $this->userModel = new User($db);
    }

    public function register($name, $email, $password) {
        return $this->userModel->register($name, $email, $password);
    }

    public function login($email, $password) {
        return $this->userModel->login($email, $password);
    }
}
?>
