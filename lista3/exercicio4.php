<?php
        /* Crie um script em PHP que exiba separadamente o dia, mês
e ano de uma data completa a partir de uma variável. */

    
   $dia =  date('d')."<br>";
   $mes = date('F')."<br>";
   $ano = date('Y')."<br>";
    
    echo "Dia: ".$dia."<br>";
    echo "Mês: ".$mes."<br>";
    echo "Ano: ".$ano."<br>";
    echo "hoje é:". date('d/m/y')."<br>";
?>