<?php 
    require_once 'lib/session.php';

    //Inicializar a aplicação, sendo a sessão controlada pela classe session
    //1 - Criar uma instância da classe session que será utilizada na aplicação toda.
    if(!isset($session)) {
        $session = new session();
    }
    $session->iniciaSessao();
    
    echo($session->getStatus());
?>