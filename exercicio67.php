<?php

	class acessoSistema
{
	Private static int $TotalAcessos = 0;

	public function __construct()
	{
	  self::$TotalAcessos++;
	}

	public static function getTotalAcessos():int
	{
	  return self::$TotalAcessos;
	}
}

$acesso1 = new acessoSistema();
$acesso2 = new acessoSistema();
$acesso3 = new acessoSistema();

print "TotalAcessos: " .acessoSistema:: getTotalAcessos()


?>
