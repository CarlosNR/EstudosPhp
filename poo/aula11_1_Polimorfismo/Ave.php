<?php
    require_once "Animal.php";
    class Ave extends Animal{

        protected $corPena;

        function locomover(){
            echo "</br>Voando</br>";
        }
        function alimentar(){
            echo "</br>Comendo frutas</br>";
        }
        function emitirSom(){
            echo "</br>som de ave</br>";
        }
        function fazerNinho(){
            echo "</br>contruiu ninho</br>";
        }
        

		public function getCorPena(){

			return $this->corPena;
			
		}

		public function setCorPena($corPena){

			$this->corPena = $corPena;
			
		}
    }
?>