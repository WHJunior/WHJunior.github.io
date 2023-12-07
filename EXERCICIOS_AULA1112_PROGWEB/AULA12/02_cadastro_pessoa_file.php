<?php
    try {
        if(isset($_POST['campo_primeiro_nome'])) {
           $file = fopen("cad_pessoa.json", "a+");
           if($file) {
               $dados = json_encode(array("primeiro_nome" => $_POST['campo_primeiro_nome'],
                                          "sobrenome" => $_POST['campo_sobrenome'],
                                          "email" => $_POST['campo_email'],
                                          "password" => $_POST['campo_password'],
                                          "cidade" => $_POST['campo_cidade'],
                                          "estado" => $_POST['campo_estado'])) . PHP_EOL;
               $result = fwrite($file, $dados);
               if($result) {
                   echo "<br>Dados inseridos com sucesso. <a href='02_cadastro_pessoa_file.html'>Clique para voltar</a>";
               } else {
                   echo "<br>Result: ".$row['qtdtabs'];
               }
               fclose($file);
           }   
        }
    } catch (Exception $e){
        echo $e->getMessage();
    }
?>