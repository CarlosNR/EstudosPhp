<?php
    require_once "Mae.php";
    require_once "InterfaceFilha.php";
    require_once "InterfaceMae.php";
    class Filha extends Mae implements InterfaceFilha, InterfaceMae {
        // ...
    }
?>