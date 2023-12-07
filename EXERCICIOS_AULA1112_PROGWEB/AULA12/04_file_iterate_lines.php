<?php

    $file = fopen("cad_pessoa.json", "r");
    if($file) {
        while(($linha = (fgets($file))) !== false) {
           $aLinha = json_decode($linha);
           echo $linha; 
        }        
        fclose($file);
    }

?>