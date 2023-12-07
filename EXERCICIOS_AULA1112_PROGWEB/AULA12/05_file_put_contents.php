<?php 

    if(file_exists("dados.txt")) {
        $conteudo = file_get_contents("dados.txt");
        $serializedContent = serialize($conteudo);
        file_put_contents("dados2.txt", $serializedContent);
        echo "OK";
    } else {
        echo "Arquivo dados.txt não existe na pasta raiz.";
    }

?>