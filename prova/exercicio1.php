<?php
    /* Efetue um script PHP que calcule e imprima o salário reajustado de um funcionário de acordo com a seguinte regra:
        • Salários até 300, reajuste de 50%
        • Salários maiores que 300, reajuste de 30% */

    $salario = 1000;
    echo "salário: ".number_format($salario,2)."<br>";
    
    

    if ($salario <= 300) {
        
        $reajuste1 = $salario + ($salario *(50/100));
        echo "Salário reajustado: ".number_format($reajuste1,2)."<br>";
        
    }
    else if ($salario >300) {
        $reajuste2 = $salario + ($salario *(30/100));
        echo "Salário reajustado: ".number_format($reajuste2,2)."<br>";
    }


?>