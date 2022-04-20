<?php
    include('conexao.php');
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $telefone_usuario = $_POST['telefone_usuario'];

    echo "<p>Nome do usuario: " . $nome_usuario . "<br>";
    echo "E-mail: " . $email_usuario . "<br>";
    echo "Telefone: " . $telefone_usuario . "</p>";

    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
            VALUES ('". $nome_usuario."',  '" .$email_usuario."', '".$telefone_usuario."')";
    
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Dados cadastrados com sucesso!";
    }
    else 
        echo "Erro ao tentar cadastrar dados no banco!".mysqli_error($con);

?>