<?php
    include('conexao.php');
    
    // Upload da foto     
    $fotoNome = $_FILES['foto']['aome'];
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

    
    $conteudo = $_POST['conteudo'];
    $materia = $_POST['materia'];
    $dia = $_POST['dia'];
    $anotacoes = $_POST['anotacoes'];
    $horario = $_POST['horario'];

    echo "<p>Conteudo: ". $conteudo."<br>";
    echo "Materia:" . $materia . "<br>";
    echo "Dia: " . $dia . "<br>";
    echo "Anotações: ". $anotacoes . "<br>";
    echo "horario = " . $horario ."</p>";    
    

    $sql = "INSERT INTO cronograma (conteudo, materia, dia, anotacoes, horario, foto_blob, foto_nome)
            VALUES ('". $conteudo."', '". $materia ."', '" . $dia ."', '". $anotacoes . "', '" .  $horario ."', '" . $fotoBlob . "', '". $fotoNome."')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Contato cadastrado com sucesso!";
    }
    else
        echo "Erro ao tentar cadastrar os cados no cronograma" . mysqli_error($con);

?>
<a href='index.php'>Voltar ao menu inicial</a>