<?php
    include('conexao.php');
    $consulta = $_POST['consulta'];
    $valor= $_POST['valor'];

    $totalEntrada = $tipo['entrada'];
    
    $saldoTotal = $totalEntrada - $totalSaidas; 

?>