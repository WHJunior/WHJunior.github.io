<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: PROGWEB_TRABALHO_FINAL\list_client.php');
    exit();
}
header('Location: PROGWEB_TRABALHO_FINAL\login.php');
?>