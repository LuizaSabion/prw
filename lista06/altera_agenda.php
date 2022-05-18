<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = 'SELECT * FROM agenda where id_agenda =' . $id_agenda;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 06</title>
</head>
<body>
    <h2>Alteração do Contato</h2>
    <hr>
    <form method="post" action="altera_agenda_exe.php">

    <div>
            <label for="nome">Nome:</label>
            <input name="nome" type="text" size="50"
            value="<?php echo $row['nome'] ?>" placeholder="Digite o novo nome: "> 
        </div>
        <div>
            <label for="apelido">Apelido:</label>
            <input name="apelido" type="text" size="40"
            value="<?php echo $row['apelido']?>" placeholder="Digite o novo apelido: ">
        </div>

        <div>
            <label for="endereco">Endereço:</label>
            <input name="endereco" type="text" size="70"
            value="<?php echo $row['endereco']?>" placeholder="Digite o novo Endereço: ">
        </div>

        <div>
            <label for="bairro">Bairro:</label>
            <input name="bairro" type="text" size="50"
            value="<?php echo $row['bairro'] ?>" placeholder="Digite o novo Bairro:" >
        </div>

        <div>
            <label for="cidade">Cidade:</label>
            <input name="cidade" type="text" size="50"
            value="<?php echo $row ['cidade']?>" placeholder="Digite o novo Bairro: ">
        </div>

        <div>
            <label for="estado">Estado:</label>
            <input name="estado" type="text" size="02"
            value="<?php echo $row['estado']?>" placholder="Digite o novo estado: ">
        </div>

        <div>
            <label for="telefone">Telefone:</label>
            <input name="telefone" type="text" size="15"
            value="<?php echo $row['telefone']?>" placeholder="Digite o novo telefone: "> 
        </div>

        <div>
            <label for="celular">Celular:</label>
            <input name="celular" type="text" size="15"
            value="<?php echo $row['celular'] ?>" placeholder="Digite o novo celular: ">
        </div>

        <div>
            <label for="email">Email:</label>
            <input name="email" type="email" size="70"
            value="<?php echo $row['email']?>" placeholder="Digite o novo email: ">
        </div>

        <div>
            <label for="dt_cadastro">Data do cadastro:</label>
            <input name="dt_cadastro" type="date"
            value="<?php echo $row['dt_cadastro'] ?>" placeholder="Digite a nova data de cadastro: ">
        </div>

        <div>
            <button type="submit">Cadastar</button>
        </div>
        
       
        <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
    </form>    
</body>
</html>