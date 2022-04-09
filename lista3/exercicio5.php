<?php 
        /*Crie um script em PHP que a partir de uma data exiba o dia
        da semana (segunda, terça, ...).*/
      
        $hoje = date("w");
        $diaSemana[0] = "Domingo";
        $diaSemana[1] = "Segunda-feira";
        $diaSemana[2] = "Terça-feira";
        $diaSemana[3] = "Quarta-feira";
        $diaSemana[4] = "Quinta-feira";
        $diaSemana[5] = "Sexta-feira";
        $diaSemana[6] = "Sábado";
        
        echo "Hoje é: $diaSemana[$hoje]";

?>
