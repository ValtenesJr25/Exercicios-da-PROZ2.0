<?php

class Funcionario {
    protected $nome;
    protected $salarioBase;

    public function __construct($nome, $salarioBase) {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario() {
        return $this->salarioBase;
    }
}


class Gerente extends Funcionario {
    private $bonus;

    public function __construct($nome, $salarioBase, $bonus) {
        parent::__construct($nome, $salarioBase);
        $this->bonus = $bonus;
    }

    public function calcularSalario() {
        return $this->salarioBase + $this->bonus;
    }
}


// Criando um funcionário
$funcionario = new Funcionario("João", 2000);

// Criando um gerente
$gerente = new Gerente("Carlos", 3000, 1000);

echo "Salário do funcionário: R$ " . $funcionario->calcularSalario() . "\n";
echo "Salário do gerente: R$ " . $gerente->calcularSalario() . "\n";

?>
