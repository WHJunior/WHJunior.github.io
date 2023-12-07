<?php 
    class computador {
        private $estadoAtual;
        public function __construct() {
           $this->estadoAtual = "Desligado";
        }
        public function liga() {
            $this->estadoAtual = "Ligado";
        }
        public function desliga() {
            $this->estadoAtual = "Desligado";
        }
        public function getEstadoAtual() {
            return $this->estadoAtual;
        }
    }

    $comp = new computador();
    echo "Estado Atual: " . $comp->getEstadoAtual() . "<br>";
    $comp->liga();
    echo "Estado Atual: " . $comp->getEstadoAtual() . "<br>";
    $comp->desliga();
    echo "Estado Atual: " . $comp->getEstadoAtual();
?>