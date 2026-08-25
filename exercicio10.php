<?php

class Livro {
    public $titulo;
    public $autor;
    public $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "Livro emprestado com sucesso!\n";
        } else {
            echo "Erro: o livro já está emprestado!\n";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        echo "Livro devolvido com sucesso!\n";
    }
}


// Criando um livro
$livro = new Livro("O Hobbit", "J.R.R. Tolkien");

echo "Título: " . $livro->titulo . "\n";
echo "Autor: " . $livro->autor . "\n";

// Emprestando
$livro->emprestar();

// Tentando emprestar novamente
$livro->emprestar();

// Devolvendo
$livro->devolver();

// Emprestando novamente
$livro->emprestar();

?>
