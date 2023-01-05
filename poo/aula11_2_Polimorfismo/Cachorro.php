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

        function reagirFrase($frase){

            if(($frase == "toma comida") || ($frase == "olá")){
                echo "</br>Abanar e latir</br>";
            }else{
                echo "</br>Rosnar</br>";

            }

        }

        //sobrecarga1
        function reagirHora($hora, $min){

            if($hora<12){
                echo "</br>Abanar</br>";
            }elseif($hora>=18){
                echo "</br>Ignorar</br>";
            }else{
                echo "</br>Abanar e latir</br>";
            }

        }

        //sobrecarga2
        function reagirDono($dono){
            if($dono){
                echo "</br>Abanar</br>";
            }else{
                echo "</br>Rosnar e latir</br>";
            }
        }

        //sobrecarga3
        function reagirIdade($idade, $peso){
            if($idade < 5){
                if($peso<10){
                    echo "</br>Abanar rabo</br>";
                }else{
                    echo "</br>Latir</br>";
                }
            }else{
                if($peso < 10){
                    echo "</br>Rosnar</br>";
                }else{
                    echo "</br>Ignorar</br>";
                }
            }
        }
    }
?>