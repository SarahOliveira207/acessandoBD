<html>
    <body>
        <?php
            include "util.php";

            $conn = conectar();

            $filtro = $_GET['name'];
            $varSQL = "SELECT * FROM alunos WHERE nome == :name";

            $select = $conn->prepare($varSQL);
            $select->bindParam(":nome", $filtro);
            $select->execute();
            //$result = $select->get_result();

            echo "<h2>Resultados da busca:</h2>";
            while ($linha = $select->fetch()) {
                echo $linha['nome'];
            }
        ?>
    </body>
</html>