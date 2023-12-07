<?php
    namespace app\model;

    class endereco {
        private $logradouro;
        private $bairro;
        private $cidade;
        private $estado;
        private $cep;
        private $numero;

        public function getLogradouro() {
            return $this->logradouro;
        }

        public function setLogradouro($sLogradouro) {
            $this->logradouro = $sLogradouro; 
        }

        public function getBairro()
        {
            return $this->bairro;
        }

        public function setBairro($bairro)
        {
            $this->bairro = $bairro;
        }

        public function getCidade()
        {
            return $this->cidade;
        }

        public function setCidade($cidade)
        {
            $this->cidade = $cidade;
        }

        public function getEstado()
        {
            return $this->estado;
        }

        public function setEstado($estado)
        {
            $this->estado = $estado;
        }

        public function getCep()
        {
            return $this->cep;
        }

        public function setCep($cep)
        {
            $this->cep = $cep;
        }

        public function getNumero()
        {
            return $this->numero;
        }

        public function setNumero($numero)
        {
            $this->numero = $numero;
        }
    }

?>