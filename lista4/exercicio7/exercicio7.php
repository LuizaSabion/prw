<?php
        /* Escreva um algoritmo para ler o nome e a idade de uma pessoa, e exibir quantos
        dias de vida ela possui. Considere sempre anos completos, e que um ano possui 365
        dias. */

        $nome = $_POST ['nome'];
        $idade = $_POST ['idade'];
        
        $dias = $idade * 365;
        
        echo "Nome: " . $nome . "<br>";
        echo "Idade: " . $idade . "<br>";
        echo $nome . " possui " . $dias . " dias de vida <br>";

?>