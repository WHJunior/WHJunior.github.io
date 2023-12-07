<?php
    try {
        $dbconn = pg_connect("host=localhost port=5432 dbname=local user=postgres password=123456");
        if($dbconn) {
            $result = pg_query($dbconn, "SELECT * FROM  TBPESSOA"); 
            while($row = pg_fetch_assoc($result)) {
                echo print_r($row) . "<br>";
            }
        }
    } catch (Exception $e){
        echo $e->getMessage();
    }
?>