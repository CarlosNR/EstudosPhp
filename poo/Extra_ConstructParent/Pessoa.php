<?php

require_once "interfacePessoa.php";

class Pessoa implements interfacePessoa{

    private $nome, $idade, $sexo;

    public function fazerAniv() {
        $this->Idade += 1;
    }

    public function __construct($nome, $idade, $sexo){

        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;

    }

}
?>
