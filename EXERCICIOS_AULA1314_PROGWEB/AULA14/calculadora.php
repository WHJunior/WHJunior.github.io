<?php 
    class calculadora {
        public function soma($valor1, $valor2) {
            return $valor1 + $valor2;
        }
        public function multiplica($valor1, $valor2) {
            return $valor1 * $valor2;
        }
        public function divide($valor1, $valor2) {
            return $valor1 / $valor2;
        }
        public function subtrai($valor1, $valor2) {
            return $valor1 - $valor2;
        }
    }

    $calc = new calculadora();
    echo $calc->soma(10, 5) . "<br>";
    echo $calc->multiplica(10, 5) . "<br>";
    echo $calc->divide(10, 5) . "<br>";
    echo $calc->subtrai(10, 5) . "<br>";
?>