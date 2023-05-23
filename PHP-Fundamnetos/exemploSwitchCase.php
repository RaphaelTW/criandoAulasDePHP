<?php
// controle de fluxo switch case

$numa = 10;
$numb = 5;
$numc = 0;
$numd = 1;

switch ($numb) {  // só testa variáveis que possam ser convertidas para inteiro

    case 10 : // bloco case
        echo "O valor é $numa";
        break;
    case 5 :
        echo "O valor é $numb";
        break;
    case 0 :
        echo "O valor é $numc";
        break;
    case 1 :
        echo "O valor $numd";
        break;
}