<?php
    include('conexao.php');
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

   /* if ($tipo=='entrada') {
        echo "Entrada";
    }
    else {
        echo "Saida";
    }

    if ($cheque=='sim') {
        echo "Sim";
    }
    else {
        echo "Não";
    }*/
    
    echo "<p>Data: ". $data ."<br>";
    echo "Tipo: " . $tipo . "<br>";
    echo "valor: " . $valor . "<br>";
    echo "historico: " . $historico. "<br>";
    echo "cheque: " . $cheque . "</p>";

    $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)
            VALUES ('". $data."', '". $tipo . "', '". $valor ."', '" . $historico."', '" . $cheque."')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "fluxo de caixa cadastrado com sucesso!";
    }
    else
        echo "Erro ao tentar cadastrar os dados no fluxo de caixa" . mysqli_error($con);

?>