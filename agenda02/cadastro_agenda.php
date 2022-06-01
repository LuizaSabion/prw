<?php
    include('conexao.php');

    // Upload da foto     
    $fotoNome = $_FILES['foto']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){        
        // Upload file
        if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
            $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
        }
    }

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

    $sql = "INSERT INTO contatos (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro, foto_blob, foto_nome)
            VALUES ('". $nome."', '". $apelido ."', '" . $endereco ."', '". $bairro . "', '" .  $cidade ."', '" . $estado . "', '" . $telefone . "', '" . $celular . "', '". $email . "', '". $dt_cadastro."', '" . $fotoBlob ."', '" . $fotoNome. "')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Dados cadastrados com sucesso!";
    }
    else 
        echo "Erro ao tentar cadastrar dados no banco!".mysqli_error($con);

?>