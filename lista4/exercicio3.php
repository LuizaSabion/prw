<?php
    /* Escreva um programa em PHP para receber o nome de um estado do Brasil em
um formulário e exibir sua capital.*/

    switch ($sigla="SP") {
            
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
        case 'BA':
            echo "Bahia";
            break;
        case 'CE':
            echo "Ceará";
            break;
        case 'DF':
            echo "Distrito Federal";
            break;
        case 'ES':
            echo "Espírito Santo";
            break;
        case 'GO':
            echo "Goiás";
            break;
        case 'MA':
            echo "Maranhão";
            break;
        case 'MT':
            echo "Mato Grosso";
            break;
        case 'MS':
            echo "Mato Grosso do Sul	";
            break;
        case 'MG':
            echo "Minas Gerais";
            break;
        case 'PA':
            echo "Pará";
            break;
        case 'PB':
            echo "Paraíba";
            break;
        case 'PR':
            echo "Paraná";
            break;
        case 'PE':
            echo "Pernambuco";
            break;
        case 'PI':
            echo "Piauí";
            break;
        case 'RJ':
            echo " Rio de Janeiro";
            break;
        case 'RN':
            echo "Rio Grande do Norte";
            break;
        case 'RS':
            echo "Rio Grande do Sul";
            break;
        case 'RO':
            echo "Rondônia";
            break;
        case 'RR':
            echo "Roraima";
            break;
        case 'SC':
            echo "Santa Catarina";
            break;
        case 'SP':
            echo "São Paulo";
            break;
        case 'SE':
            echo "Sergipe";
            break;
        case 'TO':
            echo "Tocantins";
            break;
        default:
        echo "A sigla informada não é valida";
        } 

?>