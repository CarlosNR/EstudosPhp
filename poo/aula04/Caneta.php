<?php
    class Caneta{

        public $modelo;
        private $ponta;
        private $tampada;
        private $cor;
        
        //__contruct
        public function __construct($m,$c,$p){
            //construct pode criar atributo, mas cria sempre como publico
            $this->modelo =$m;
            $this->cor = $c;
            $this->ponta = $p;
            
            $this->tampar();
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getPonta(){
            return $this->ponta;
        }

        public function setPonta($p){
            $this->ponta = $p;
        }

        public function tampar(){
            $this->tampada = true;
            echo "caneta tampada<br>";
        }

        public function destampar(){
            $this->tampada = false;
            echo "caneta destampada<br>";
        }
    }

// C:\Users\Carlos\AppData\Roaming\Code\User\phpGettersSetters
// altera getters e setters automaticos, n tem constructor
?>