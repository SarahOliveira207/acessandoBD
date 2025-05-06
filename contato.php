<?php
    $string_conexao = "pgsql:host=localhost; port=5432; dbname=cursos; user=postgres; password=postgres";

    $conn = new PDO($string_conexao);

    if(!$conn){
        echo "nao posso continuar";
        exit;
    }

    $varSQL = "select nome, email, celular from alunos order by nome, email, celular";

    $select = $conn->query($varSQL);
    
        /*echo "Nome:" .$linha['nome']."</br>";
        echo "Email: " .$linha['email']."</br>";
        echo "Celular: " .$linha['celular']."</br>";*/


    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Idade</th></tr>";

    while($linha = $select->fetch()){
        echo "<tr>";
        echo "<td>{$linha['nome']}</td>";
        echo "<td>{$linha['email']}</td>";
        echo "<td>{$linha['celular']}</td>";
        echo "</tr>";
    }

    echo "</table>";
?>