<?php

class Calculadora {

    public static function soma($numero1, $numero2) {
        return $numero1 + $numero2;
    }
}

$resultado = Calculadora::soma(5, 10);

echo "A soma de 5 e 10 é: " . $resultado;
?>
