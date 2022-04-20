<?php
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $fone_usuario = $_POST['fone_usuario'];

    echo "<p>Nome do usuario: " . $nome_usuario . "<br>";
    echo "E-mail: " . $email_usuario . "<br>";
    echo "Telefone: " . $fone_usuario . "</p>";

?>