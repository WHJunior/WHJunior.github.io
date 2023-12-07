<?php 

    if(file_exists("dados.txt")) {
        $conteudo = file_get_contents("dados.txt");
        echo "Conteúdo <br>" . $conteudo;
    } else {
        echo "Arquivo dados.txt não existe na pasta raiz.";
    }

?>