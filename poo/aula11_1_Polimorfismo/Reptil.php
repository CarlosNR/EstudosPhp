<?php
    require_once "Animal.php";
    class Reptil extends Animal{

        protected $corEscama;

        function locomover(){
            echo "Rastejando";
        }
        function alimentar(){
            echo "Comendo";
        }
        function emitirSom(){
            echo "som de réptil";
        }
        

		public function getCorEscama(){

			return $this->corEscama;
			
		}

		public function setCorEscama($corEscama){

			$this->corEscama = $corEscama;
			
		}
    }
?>