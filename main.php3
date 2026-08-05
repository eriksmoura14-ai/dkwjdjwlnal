<?php
$dia = readline("Digite um numero para saber que dia é hoje: ");
switch ($dia) {
    case 1 :
        echo "Hoje é Segunda-Feira!!";
        break;
    case 2 :
        echo "Hoje é Terça-Feira!!";
        break;
    case 3 :
        echo "Hoje é Quarta-Feira!!";
        break;
    case 4 :
        echo "Hoje é Quinta-Feira!!";
        break;
    case 5 :
        echo "Hoje é Sexta-Feira!!";
        break;
    case 6 :
        echo "Hoje é Sábado!!";
        break;
    case 7 :
        echo "Hoje é Domingo!!";
        break;
    
    default:
        echo"Numero invalido!!\n";
        echo"Digite um numero de 1 a 7\n";
        break;
}
