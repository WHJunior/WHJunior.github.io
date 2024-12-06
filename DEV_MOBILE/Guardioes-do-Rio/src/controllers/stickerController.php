<?php
// require_once '../models/Sticker.php';
require_once __DIR__ . '/../models/Sticker.php';

class StickerController {
    private $stickerModel;

    public function __construct($db) {
        $this->stickerModel = new Sticker($db);
    }

    public function redeemSticker($userId, $code) {
        return $this->stickerModel->redeem($userId, $code);
    }

    public function getStickers($userId) {
        return $this->stickerModel->getUserStickers($userId);
    }
}
?>
