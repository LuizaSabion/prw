<?php
    include('conexao.php');

    $id_agenda = $_GET['id_cronograma'];

    $sql = 'DELETE FROM estudos WHERE id_cronograma ='.$id_agenda;

    echo "<h1> Exclusão de Contato </h1>";
    $result = mysqli_query($con, $sql);

    if($result)
        echo "Cantato excluido com sucesso<br>";
    else
        echo "Erro ao tentar excluir o contato: ".mysqli_error($con)."<br>";

?>
<a href='listar_cronograma.php'>Voltar</a>