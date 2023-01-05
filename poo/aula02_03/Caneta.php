<?php
    class Caneta{
        public $modelo;
        public $cor;
        private $t_ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar(){
            if ($this->tampada == false || $this->carga != "vazia"){
                echo "estou desenhando<br>";
            }else{
                echo "favor tirar a tampa ou recarregar a tinta antes de desenhar<br>";
            }
            
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
?>