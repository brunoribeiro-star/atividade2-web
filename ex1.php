<?php

//ex1
class Livro {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
}

public function getTitulo() {
    return $this->titulo;
}
public function getAutor() {
    return $this->autor;
}

public function exibirInfo() {

    echo "O nome do livro é: {$this->titulo},
    
    e seu autor é: {$this->autor}";
    
    }
}

$livro = new Livro("A volta dos que não foram", "leonardo damoser");
$livro->exibirInfo();

?>