<html>
    <body>
        <?php
            $string_conexao = "pgsql:host=localhost; port=5432; dbname=cursos; user=postgres; password=postgres";

            $conn = new PDO($string_conexao);

            if(!$conn){
                echo "nao posso continuar";
                exit;
            }

            /*$varSQL= "select titulo, descricao from curso";

            $select = $conn->query($varSQL);*/

            $varSQL = "SELECT * FROM curso WHERE (valor < :valor)";

            $filtroValor = 1109;
            $select = $conn->prepare($varSQL);
            $select->bindParam (":valor", $filtroValor);
            $select->execute();

            while($linha = $select->fetch()){
                echo "<mark>Titulo:</mark>" .$linha['titulo']."</br>";
                echo "<strong>Descricao: </strong>" .$linha['descricao']."</br>";
            }
        ?>
    </body>
</html>