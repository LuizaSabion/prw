<?php
    /* Escreva um programa em PHP para receber o nome de um estado do Brasil em
um formulário e exibir sua capital.*/

    switch ($sigla="AP") {
            
        case 'AC':
            echo "Acre";
            break;
        case 'AL':
            echo "Alagoas";
            break;
        case 'AP':
            echo "Amapá";
            break;
        case 'AM':
            echo "Amazonas";
            break;
        
        default:
        echo "O numero informado não é valido";
        } 

?>