<?php
    include ('conexao.php');
    $sql = 'SELECT * FROM cronograma';

    //retornar os dados da culsulta
    $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta  charset="UT-8">

        <title> Estudos </title>
    </head>
    <body>
        <h1>Cronograma</h1>
        <table align="center" border="1" widt=500>
            <tr>
                <th>Código</th>
                <th>Materia</th>
                <th>Conteúdo</th>
                <th>Dia</th>
                <th>Anotações</th>
                <th>Horário</th>
                <th>Mapa Mental</th>
                <th>Excluir</th>  
            </tr>
            <?php
                while ($row = mysqli_fetch_array($result)){

                    echo "<tr>";
                    echo "<td>" . $row['id_cronograma'] . "</td>";
                    echo "<td><a href='altera_cronograma.php?id_cronograma=" .$row['id_cronograma'] . "'>".$row['conteudo']. "</a></td>";
                    echo "<td>" . $row['materia'] . "</td>";
                    echo "<td>" . $row['dia'] . "</td>";
                    echo "<td>" . $row['anotacoes'] . "</td>";
                    echo "<td>" . $row['horario'] . "</td>";
                    echo "<td><img src='data:image/jpeg;base64, ".base64_encode( $row["foto_blob"]) ."' width='150' height='150'/></td>";
                    echo "<td><a href='excluir_cronograma.php?id_cronograma=".$row['id_cronograma']."'>Excluir</a></td>";
                    echo "</tr>";
                    
                }

            ?>


        </table>
    </body>
</html>