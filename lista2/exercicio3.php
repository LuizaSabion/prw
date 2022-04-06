<?php
    /*Um número é, por definição, primo se ele não tem divisores,
    exceto 1 e ele próprio. Preparar um script PHP para verificar
    números entre 0 e 200 e determinar se cada um dele é primo ou
    não. */
    for ($num=1; $num <200 ; $num++){        
       $primo=1; //parte do principio que o numero é primo
       
       for ($div=2 ; $div <= $num/2; $div++){     
              
            if ($num % $div == 0){
                $primo = 0;
                break;
            }
        }    
        if ($primo == 1){
            echo "O número ".$num ." é primo"."<br>";
        }            
    }
?>