<?php

    function conectar($param = ""){
        if($param == ""){
            $param = "pgsql:host=localhost; port=5432; dbname=cursos; user=postgres; password=postgres";
        }
        try {
            $conn = new PDO($param);
            return $conn;
        }catch(PDOExeptio $e){
            echo "Não posso continuar";
        }
    }

?>

