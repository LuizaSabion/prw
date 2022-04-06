<?php
        /*Faça um script PHP que leia um número que represente um
determinado mês do ano. Após a leitura escreva por extenso qual
o mês lido. Caso o número digitado não esteja na faixa de 1 .. 12
escreva uma mensagem informando o usuário do erro da
digitação. */

switch ($mes=3) {
        
        case 1:
            echo "janeiro";
            break;
        case 2:
            echo "fevereiro";
            break;
        case 3:
            echo "março";
            break;
        case 4:
            echo "abril";
            break;
        case 5:
            echo "maio";
            break;
        case 6:
            echo "junho";
            break;
        case 7:
            echo "julho";
            break;
        case 8:
            echo "agosto";
            break;
        case 9:
            echo "setembro";
            break;
        case 10:
            echo "outubro";
            break;
        case 11:
            echo "novembro";
            break;
        case 12:
            echo "dezembro";
            break;
        default:
           echo "O numero informado não é valido";
        } 

?>