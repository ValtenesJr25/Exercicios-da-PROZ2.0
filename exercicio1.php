<?php

	$number1 = 37;

	$number2 = 30;

	$soma = $number1 + $number2;

	$subtracao = $number1 - $number2;

	$mult = $number1 * $number2;

	$div = $number1 / $number2; 

	$divFormat = number_format($div, 2, '.', '');

	print "SOMA = $soma\n";

	print "SUBTRACAO = $subtracao\n";

	print "MULT = $mult\n";

	print "DIV = $divFormat";

?>
