<?php
        /*Crie um script em PHP que pegue uma palavra contida em
        uma variável e substitua todas as vogais por X.*/
        
        $palavra = "instituto";
        echo $palavra."<br>";
        $vogal = array('a','e','i','o','u');
        $troca = str_replace($vogal, "x", $palavra);
        echo $troca;

?>