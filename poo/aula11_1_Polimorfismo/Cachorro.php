<?php
    require_once "Mamifero.php";
    class Cachorro extends Mamifero{
        
        function enterrarOsso(){
            echo "</br>Enterrando osso</br>";
        }

        function abanarRabo(){
            echo "</br>Abanando o rabo</br>";
        }

        public function emitirSom(){
            echo "</br>Latindo</br>";

        }
    }
?>