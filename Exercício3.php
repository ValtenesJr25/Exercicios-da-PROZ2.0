<?php

dia = readline ("digite o número do dia da semana: ");

    switch ($dia) {
        case 1:
            echo "Domingo\n";
            break;
        case 2:
            echo "Segunda-feira\n";
            break;
        case 3:
            echo "Terça-feira\n";
            break;
        case 4:
            echo "Quarta-feira\n";
            break;
        case 5:
            echo "Quinta-feira\n";
            break;
        case 6:
            echo "Sexta-feira\n";
            break;
        case 7:
            echo "Sábado\n";
            break;
        default:
            echo "Número inválido! Digite um valor entre 1 e 7.\n";
            break;
    }
?>
