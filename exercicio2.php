<?php


	$nota = readline("Nota do Aluno: ");

	if ($nota >= 7){
		print "Aprovado";
	}elseif ($nota >= 5){
		print "Recuperação";
	}else{
		print "Reprovado";
	}

?>
