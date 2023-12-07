<?php
    try {
        $dbconn = pg_connect("host=localhost port=5432 dbname=local user=postgres password=123456");
        if($dbconn) {
            $aDados = array($_POST['campo_primeiro_nome'],
                            $_POST['campo_sobrenome'],
                            $_POST['campo_email'],
                            $_POST['campo_password'],
                            $_POST['campo_cidade'],
                            $_POST['campo_estado']);
            $result = pg_query_params($dbconn, "INSERT INTO TBPESSOA 
                                                 (PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO)
                                                VALUES 
                                                 ($1, $2, $3, $4, $5, $6)",
                                                $aDados); 
            if($result) {
                echo "<br>Dados inseridos com sucesso. <a href='01_cadastro_pessoa.html'>Clique para voltar</a>";
            } else {
                echo "<br>Result: ".$row['qtdtabs'];
            }
        }
    } catch (Exception $e){
        echo $e->getMessage();
    }
?>