<?php
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $sexo = $_POST['sexo'];
    $saldoCard = $_POST['saldoCard'];
    $compra = $_POST['compra'];

    
    $erro=0;
    if (empty($nome)) {
        echo "favor digitar o nome do clente";
        $erro=1;
    }
    if (empty($cpf)) {
        echo "Favor digitar o CPF";
        $erro=1;
    }
    if (empty($rg)) {
        echo "Favor digitar o RG";
        $erro=1;
    }
    if (strlen($saldoCard) < strlen($compra)) {
        echo "Saldo Insuficiente para Concluir Compra!";
    } 
    else if (strlen($saldoCard) > strlen($compra)){
        $novoSaldo = $saldoCard - $compra;
        echo "o novo saldo é de: R$" . $novoSaldo;
    }

    echo "Nome do cliente: " . $nome . "<br>" ."Estado:". $estado  . "<br>" . "CPF:". $cpf . "<br>" ."RG:". $rg . "<br>" . "Sexo:" .$sexo . "<br>" ."saldo do cartão:". $saldocard . "<br>" . "total da compra:" .$compra . "<br>" ."Novo saldo do cartão:". $novoSaldo;
?>
