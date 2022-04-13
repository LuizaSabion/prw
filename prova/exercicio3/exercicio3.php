<?php
   echo "<h1> Calculo do IMC </h1> ";
   $peso = $_GET['peso'];
   $altura = $_GET['altura'];
   $imc = $peso / ($altura * $altura);
   
   
   echo 'peso: ' . $peso . '<br>';
   echo 'altura: ' . $altura . '<br>';
   echo "IMC: ".$imc. '<br>';

   if ($imc < 17) {
        echo "muito abaixo do peso ";
    }
    else if($imc >= 17 && $imc <= 18.4) {
    
        echo "abaixo do peso";
    }
    else if ($imc >= 18.5 && $imc <= 25 ) {
    
        echo "peso normal"; 
    }
    else if ($imc >=25 && $imc < 30) {
    
        echo "acima do peso"; 
    }
    else if ($imc >=30 && $imc < 35  ) {
    
        echo "obesidade I"; 
    }
    else if ($imc >=35 && $imc < 40  ) {
    
        echo "obesidade II (severa)"; 
    }
    else if ($imc >=40 ) {
    
        echo "obesidade III (morbida)"; 
    }

  
?>