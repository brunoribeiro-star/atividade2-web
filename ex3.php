<?php

class Animal {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
}

public function getNome() {
    return $this->nome;
}
public function getIdade() {
    return $this->idade;
}

public function setNome($novoNome) {
    $this->nome = $novoNome;
}
public function setIdade($novaIdade) {
    $this->idade = $novaIdade;
}
}

class Cachorro extends Animal {

    public function getIdade() {
        return "O cachorro tem " . parent::getIdade() . " anos";
    }
}

$cachorro = new Cachorro("Rex", 10);

echo "O nome do cachorro é: " . $cachorro->getNome() . "<br>";
echo $cachorro->getIdade() . "<br>";


?>