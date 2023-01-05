<?php
    require_once "Aluno.php";
    class Tecnico extends Aluno{
        
        private $registroProfissional;

        function praticar(){

        }

		public function getRegistroProfissional(){

			return $this->registroProfissional;
			
		}

		public function setRegistroProfissional($registroProfissional){

			$this->registroProfissional = $registroProfissional;
			
		}

    }
?>