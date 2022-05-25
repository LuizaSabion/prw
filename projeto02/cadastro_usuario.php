<?php
    include('conexao.php');

    //uploadda foto
    $fotoNome = $_FILES['foto']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fotos"]["name"]);
    //select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    //valid file exetensions
    $extensions_ar = array("jpg", "jpeg", "png", "gif");
    //check extesion
    if (in_array($imageFileType, $extensions_ar)) {
        # Ulpload file
        if (move_upload_file($_FILES['foto']['tmp_name'],$target_dir, $fotoNome)) {
            $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome))
        }
    }


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