<?php
class Sticker {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function redeem($userId, $code) {
        $stmt = $this->db->prepare("SELECT * FROM figurinhas WHERE codigo = :code");
        $stmt->execute([':code' => $code]);
        $sticker = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($sticker) {
            $stmt = $this->db->prepare("INSERT INTO usuario_figurinhas (usuario_id, figurinha_id) VALUES (:userId, :stickerId)");
            $stmt->execute([':userId' => $userId, ':stickerId' => $sticker['id']]);
            return $sticker;
        }
        return false;
    }

    public function getUserStickers($userId) {
        $stmt = $this->db->prepare("
            SELECT f.* FROM usuario_figurinhas uf 
            JOIN figurinhas f ON uf.figurinha_id = f.id 
            WHERE uf.usuario_id = :userId
        ");
        $stmt->execute([':userId' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
