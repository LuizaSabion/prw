<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dt_cadastro = $_POST['dt_cadastro'];

    echo "<p>Nome: ". $nome ."<br>";
    echo "Apelido: " . $apelido . "<br>";
    echo "Endereço: " . $endereco . "<br>";
    echo "Bairro: " . $bairro . "<br>";
    echo "Cidade: " . $cidade . "<br>";
    echo "Estado: " . $estado . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "Celular: " . $celular . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Data do Cadastro: " . $dt_cadastro . "</p>";

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro)
            VALUES ('". $nome."', '". $apelido ."', '" . $endereco ."', '". $bairro . "', '" .  $cidade ."', '" . $estado . "', '" . $telefone . "', '" . $celular . "', '". $email . "', '". $dt_cadastro."')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Contato cadastrado com sucesso!";
    }
    else
        echo "Erro ao tentar cadastrar os cados na Agenda" . mysqli_error($con);

?>