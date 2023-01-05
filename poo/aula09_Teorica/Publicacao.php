<?php
    interface Publicacao{

        function abrir();
        function fechar();
        function folhear($p);
        function avançarPag();
        function voltarPag();  

    }
?>