<?php  
        /* 5- A imobiliária Imóbilis vende apenas terrenos retangulares. Faça um algoritmo
        para ler as dimensões de um terreno e depois exibir a área do terreno */

        $altura = $_POST ['altura'];
        $base = $_POST ['base'];
        
        $area = $base * $altura;
        
        echo "Comprimento do terreno: " . $altura . "<br>";
        echo "Largura do terreno: " . $base . "<br>";
        echo "A área do terreno é de " . $area . " metros <br>";

?>