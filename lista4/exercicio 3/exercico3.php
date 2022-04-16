<?php
    /* Escreva um programa em PHP para receber o nome de um estado do Brasil em
    um formulário e exibir sua capital.*/
    $estado = $_POST['estado'];
    switch ($estado) {
            
        case 'Acre':
            echo "Rio Branco";
            break;
        case 'Alagoas':
            echo "Maceió";
            break;
        case 'Amapá':
            echo "Macapá";
            break;
        case 'Amazonas':
            echo "Manaus";
            break;
        case 'Bahia':
            echo "Salvador";
            break;
        case 'Ceará':
            echo "Fortaleza";
            break;
        case 'Espírito Santo':
            echo "Vitória";
            break;
        case 'Goiás':
            echo "Goiana";
            break;
        case 'Maranhão':
            echo "São Luís";
            break;
        case 'Mato Grosso':
            echo "Cuiaba";
            break;
        case 'Mato Grosso do Sul':
            echo "campo Grande";
            break;
        case 'Minas Gerais':
            echo "Belo Horizonte";
            break;
        case 'Pará':
            echo "Belém";
            break;
        case 'Paraíba':
            echo "João Pessoa";
            break;
        case 'Paraná':
            echo "Curitiba";
            break;
        case 'Pernambuco':
            echo "Recife";
            break;
        case 'Piauí':
            echo "Terezinha";
            break;
        case 'Rio de Janeiro':
            echo "Rio de Janeiro ";
            break;
        case 'Rio Grande do Norte':
            echo "Natal";
            break;
        case 'Rio Grande do Sul':
            echo "Porto Alegre";
            break;
        case 'Rondônia':
            echo "Porto Velho";
            break;
        case 'Roraima':
            echo "Boa Vissta";
            break;
        case 'Santa Catarina':
            echo "Florianópolis";
            break;
        case 'São Paulo':
            echo "São Paulo";
            break;
        case 'Sergipe':
            echo "Aracaju";
            break;
        case 'Tocantins':
            echo "Palmas";
            break;
        
            
        default:
        echo "O estado informado não é valido, verifique foi escrito corretamnete";
        } 

?>