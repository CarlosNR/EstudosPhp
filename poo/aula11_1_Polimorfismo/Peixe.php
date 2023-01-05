<?php
    require_once "Animal.php";
    class Peixe extends Animal{

        protected $corEscama;

        function locomover(){
            echo "</br>Nadando</br>";
        }
        function alimentar(){
            echo "</br>Comendo substâncias</br>";
        }
        function emitirSom(){
            echo "</br>Peixe não faz som</br>";
        }
        function soltarBolha(){
            echo "</br>Soltou uma bolha</br>";
        }
        

		public function getCorEscama(){

			return $this->corEscama;
			
		}

		public function setCorEscama($corEscama){

			$this->corEscama = $corEscama;
			
		}
    }
?>