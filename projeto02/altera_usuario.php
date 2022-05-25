<?php
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = 'SELECT * FROM usuario where id_usuario =' . $id_usuario;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pojeto 01</title>
</head>
<body>
    <h2>Alteração de Usuário</h2>
    <?php echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; ?>           <div id="teste">
    <hr>
    <form method="post" action="altera_usuario_exe.php" enctype='multipart/form-data'>
        
        <div>
            <label for="nome_usuario">Usuario:</label>
            <input name="nome_usuario" type="text" size="50"
            value ="<?php echo $row['nome_usuario'] ?>" placeholder="Digite o novo nome:">
        </div>
        <div>
            <label for="email_usuario">E-mail:</label>
            <input name="email_usuario" type="email"  size="50"
            value ="<?php echo $row['email_usuario'] ?>" placeholder="Digite o novo e-mail:">
        </div>
        <div>
            <label for="telefone_usuario">Telefone:</label>
            <input name="telefone_usuario" type="text" size="30"
            value ="<?php echo $row['telefone_usuario'] ?>" placeholder="Digite o novo telefone:">
        </div>
       
        <div class="form-item">
                    <input type="file" id="foto" name="foto" accept="image/*" />
        </div>     
       
        <div>            
            <button  type="submit">Cadastar</button>
        </div>
        <input name="id_usuario" type="hidden" value="<?php echo $row['id_usuario']?>">
    </form>    
</body>
</html>