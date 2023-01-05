<?php
    interface Controlador{
        //interfaces sao classes sem atributos
        //metodos abstratos: os codigos não ficam na interface
        //php da erro se poe abstract function

        public function ligar();
        public function desligar();
        public function abrirMenu();
        public function maisVolume();
        public function menosVolume();
        public function ligarMudo();
        public function desligarMudo();
        public function play();
        public function pause();

    }
?>