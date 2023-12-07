<?php
class Client {
    private $conn;
    private $table_name = "clients";

    public $nome;
    public $sobrenome;
    public $data_nascimento;
    public $email;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register() {
        $query = "INSERT INTO " . $this->table_name . " (nome, sobrenome, data_nascimento, email) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        // Limpar dados
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->sobrenome = htmlspecialchars(strip_tags($this->sobrenome));
        $this->data_nascimento = htmlspecialchars(strip_tags($this->data_nascimento));
        $this->email = htmlspecialchars(strip_tags($this->email));
        // Vincular dados
        $stmt->bindParam(1, $this->nome);
        $stmt->bindParam(2, $this->sobrenome);
        $stmt->bindParam(3, $this->data_nascimento);
        $stmt->bindParam(4, $this->email);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>