<?php
    require_once "Animal.php";
    class Mamifero extends Animal{

        protected $corPelo;

        function locomover(){
            echo "</br>Correndo</br>";
        }
        function alimentar(){
            echo "</br>Mamando</br>";
        }
        function emitirSom(){
            echo "</br>som de mamífero</br>";
        }
        
		public function getCorPelo(){

			return $this->corPelo;
			
		}

		public function setCorPelo($corPelo){

			$this->corPelo = $corPelo;
			
		}
    }
?>