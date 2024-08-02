<?php

//ex2
class Filme {
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

public function setTitulo($novoTitulo) {
    $this->titulo = $novoTitulo;
}
public function setAutor($novoAutor) {
    $this->autor = $novoAutor;
}

public function exibirInfo() {

    echo "O nome do filme é: {$this->titulo},
    
    e seu autor é: {$this->autor}";
    
    }
}

$filme = new Filme("A volta dos que não foram", "leonardo damoser");
$filme->exibirInfo();
echo "<br>";

$filme->setTitulo("Novo título");
$filme->setAutor("O novo autor");

$filme->exibirInfo();

?>