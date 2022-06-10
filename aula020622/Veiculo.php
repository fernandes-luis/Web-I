<?php

    class Veiculo{

        protected $modelo;
        protected $cor;
        protected $ano;

        public function Mover(){
            echo "Mover";
        }
        public function Parar(){
            echo "Parar";
        }
        public function setModelo($modelo){
            $this->modelo=$modelo;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function setCor($cor){
            $this->cor=$cor;
        }
        public function getCor(){
            return $this->cor;
        }
        public function setAno($ano){
            $this->ano=$ano;
        }
        public function getAno(){
            return $this->ano;
        }
    }

    class Carro extends Veiculo {

        public function ligarLimpador(){
            echo "Limpador ligado   ".$this->getModelo();
        }
    }

    class Moto extends Veiculo {
        public function empinar(){
            echo "<br>Woquim empina na ".$this->getModelo();
        }
    }

    $carro= new Carro();

    $carro->setModelo(BMW);

    $carro->ligarLimpador();

    $moto= new Moto();

    $moto->setModelo(CRF);

    $moto->empinar();

?>