<?php 

    class time {
        private $nome;
        private $anoFundacao;
        private $jogadores = Array();

        public function getJogadores() {
            return $this->jogadores;
        }
        public function addJogador($oJogador) {
            array_push($this->jogadores, $oJogador);
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

    }

    class jogador {
        private $nome;
        private $posicao;
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getPosicao(){
            return $this->posicao;
        }
        public function setPosicao($posicao) {
            $this->posicao = $posicao;
        }
    }

    $brasil = new time();
    $brasil->setNome("Brasil Futsal");
    
    $jogador = new jogador();
    $jogador->setNome("João");
    $jogador->setPosicao("Goleiro");
    
    $brasil->addJogador($jogador);

    $jogador = new jogador();
    $jogador->setNome("Beto");
    $jogador->setPosicao("Zagueiro");

    $brasil->addJogador($jogador);

    var_dump($brasil);
?>