<?php 
        /*4. Receber um determinado ano em um formulário e dizer se o ano é bissexto ou não.
        Os anos bissextos são aqueles que:
        1. São divisíveis por 4 E NÃO são divisíveis por 100
                OU
        2. São divisíveis por 400. */

        $ano = $_POST['ano'];

        if ($ano%4==0) {
            echo "o ano é bissexto";
        }
        else {
            echo "o ano não é bissexto";
        }

?>