<?php
   include('conexao.php');
   $id = $_GET['id'];
   $sql = 'SELECT * FROM fluxo_caixa where id='.$id;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova2</title>
</head>
<body>
    
    <h1>Fluxo do caixa</h1>
    <div id="teste">
        <form method="post" action="altera_fluxo_caixa_exe.php">
            <fieldset>
                <legend>Cadastro</legend>
                <div class="form-item">
                    <label for="data">Data::</label>
                    <input type="date" id="data" name="data" value="<?php echo $row['data']?>" placeholder="Digite a data do cadastro">
                </div>
                <div>
                    <label for="tipo">Tipo:</label>
                    <input type="radio" id="tipo" name="tipo" value="entrada" >Entrada
                    <input type="radio" id="tipo" name="tipo" value="saida">Saida 
                </div>
                <div class="form-item">
                    <label for="Valor">Valor:</label>
                    <input type="decimal" id="valor" name="valor" value="<?php echo $row['valor']?>" placeholder="selecione a opção">
                </div>
                <div class="form-item">
                    <label for="historico">Historico:</label>
                    <input type="text" id="historico" name="historico" value="<?php echo $row['historico']?>" placeholder="Digite o historico">
                </div>
                <div class="form-item">
                    <label for="cheque">Cheque:</label>
                    <input type="text" id="cheque" name="cheque" value="<?php echo $row['cheque']?>" placeholder="Selecione a opção">
                </div>
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id" type="hidden" value="<?php echo $row['id']?>">
            </fieldset>checkbox
        </form>
    </div>
</body>
</html>