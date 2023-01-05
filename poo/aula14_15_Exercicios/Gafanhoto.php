<?php
    require_once "Pessoa.php";
    class Gafanhoto extends Pessoa{
        
        private $login;
        private $totAssistido;

        function __construct($nome, $idade, $sexo, $login){

            $this->setLogin($login);
            $this->setTotAssistido(0);
            parent::__construct($nome, $idade, $sexo);

        }

        public function viuMaisUm(){
            echo "</br>Mais um video assistido</br>";
            parent::ganharExp();
        }

		public function getTotAssistido(){

			return $this->totAssistido;
			
		}

		public function setTotAssistido($totAssistido){

			$this->totAssistido = $totAssistido;
			
		}

		public function getLogin(){

			return $this->login;
			
		}

		public function setLogin($login){

			$this->login = $login;
			
		}
    }
?>