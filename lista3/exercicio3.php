<?php
    /* Crie um script em PHP a em que a partir do seu CEP. Capture
    apenas os 3 últimos números e exiba-o. */

    $cep = "16201410";
    $cep= substr($cep,5,3);
    echo $cep; 
    



?>