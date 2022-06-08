<?php
    include('conexao.php');
    $id_agenda = $_GET['id_cronograma'];
    $sql = 'SELECT * FROM cronograma where id_cronograma =' . $id_cronograma;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>
</head>
<body>
    <h2>Alteração do Cronograma</h2>
    <hr>
    <form method="post" action="altera_cronograma_exe.php">

    
    <div>
            <label for="conteudo">Conteudo:</label>
            <input name="conteudo" type="text" size="150"
            value="<?php echo $row['conteudo'] ?>" placeholder="Digite o novo conteudo: ">>
        </div>
        <div>
            <label for="materia">Materia:</label>
            <input name="materia" type="text" size="50"
            value="<?php echo $row['materia'] ?>" placeholder="Digite a nova materia: ">>
        </div>

        <div>
            <label for="dia">Dia:</label>
            <input name="dia" type="date" 
            value="<?php echo $row['dia'] ?>" placeholder="Digite o novo dia de estudo: ">>
        </div>

        <div>
            <label for="anotacoes">Anotações:</label>
            <input name="anotacoes" type="text" size="1000"
            value="<?php echo $row['anotacoes'] ?>" placeholder="Digite a nova anotação: ">>
        </div>

        <div>
            <label for="horario">Horario:</label>
            <input name="horario" type="time" 
            value="<?php echo $row['horario'] ?>" placeholder="Digite o novo horario de estudo: ">
        </div>
        
        <div class="form-item">
                    <input type="file" id="foto" name="foto_blob" accept="image/*" />
        </div> 
      
        
        <div>
            <button type="submit">Cadastar</button>
        </div>
        
       
        <input name="id_cronograma" type="hidden" value="<?php echo $row['id_cronograma']?>">
    </form>    
</body>
</html>