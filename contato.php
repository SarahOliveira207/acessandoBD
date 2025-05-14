<html>
    <body>
        <style>
            table{
                color
            }
        </style>
        <?php
            include "util.php";

            $conn = concetar();
            // $varSQL = "select nome, email, celular from alunos order by nome, email, celular"; //sentença sql que mostra todos os alunos
            $varSQL = "select *from alunos";
            $select = $conn->query($varSQL);
            ?>

            <table>
                <tr>
                    <td>Nome</td><td>Email</td><td>Celular</td>
                </tr>
            </table>
            <?php

                while($linha = $select->fetch()){ //fetch - responsável por fazer a leitura do select
                    echo "<tr>";
                    echo "<td>{$linha['nome']}</td>";
                    echo "<td>{$linha['email']}</td>";
                    echo "<td>{$linha['celular']}</td>";
                    echo "</tr>";
                }
        ?>
    </body>
</html>