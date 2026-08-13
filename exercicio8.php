<?php

function ehpar($numero){

	if($numero %2 == 0){

		return "par";

	} else {

		return "impar";

	}

}

$numero = readline("Digite seu numero: ");

print ehpar($numero);

?>
