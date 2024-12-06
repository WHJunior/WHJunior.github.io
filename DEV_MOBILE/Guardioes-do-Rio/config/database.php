<?php
try {
    $db = new PDO('pgsql:host=localhost;dbname=guardioes', 'postgres', 'admin1470');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
