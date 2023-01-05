<?php

    require_once "Pessoa.php";
    require_once "interfacePessoa.php";
    require_once "interfaceAluno.php";

    class Aluno extends Pessoa implements interfacePessoa, interfaceAluno{

        private $matricula, $curso;

        public function cancelarMatricula() {
            echo "<p>Matricula do aluno cancelada.</p>";
        }

        //construtor herdado + modificação
        public function __construct($nome, $idade, $sexo, $matricula, $curso){

            //ao inves de reescrever por cima do metodo pai, reutiliza ele
            parent::__construct($nome, $idade, $sexo);
            $this->matricula = $matricula;
            $this->$curso = $curso;

        }

    }
?>
