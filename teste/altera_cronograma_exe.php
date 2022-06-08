<?php
    include('conexao.php');
    
    $conteudo = $_POST['conteudo'];
    $materia = $_POST['materia'];
    $dia = $_POST['dia'];
    $anotacoes = $_POST['anotacoes'];
    $horario = $_POST['horario'];
    
    

    echo "<h1> Alteração de Dados </h1>";
    echo "<p> conteudo : " . $conteudo . "<p>";

    $sql = "UPDATE cronograma SET
            conteudo = '". $conteudo."',
            materia = '" . $materia . "',
            dia = '" . $dia . "',
            anotacoes = '" . $anotacoes . "',
            horario = '" . $horario ."',
            foto_blob='". $fotoBlob . "',
            foto_nome='". $fotoNome . "'
            WHERE id_cronograma =" . $id_cronograma;

      $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Contato cadastrado com sucesso! <br>";
    }
    else
        echo "Erro ao tentar cadastrar os cados na Cronograma" . mysqli_error($con) . "<br>";
    

?>
<a href='index.php'>Voltar ao menu inicial</a>