<?php

class Animal {
    protected $nome;
    protected $idade;

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

class Cavalo extends Animal {

    public function getIdade() {
        return "O cavalo tem " . parent::getIdade() . " anos";
    }
}

$cavalo = new Cavalo("Rex", 10);

echo "O nome do cavalo é: " . $cavalo->getNome() . "<br>";
echo $cavalo->getIdade() . "<br>";


?>