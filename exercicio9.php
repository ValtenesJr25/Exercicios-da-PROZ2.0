<?php

function calculardesconto($valor, $desconto = 10){

    return $valor - ($valor * $desconto / 100);

}

$valor = readline("Digite o valor: ");
$desconto = readline("Digite a porcentagem do desconto: ");

print "Valor final: " .calculardesconto($valor,$desconto);

?>
