<?php
    require_once "Pessoa.php";

    //herança pra difença: quando tu usa extends com coisas a mais, diferente de Visitante que apenas pega os metodos e atributos de Pessoa
    class Aluno extends Pessoa{
        
        private $matr;
        private $curso;

        function pagarMensalidade(){
            echo "</br>Mensalidade do aluno {$this->getNome()} paga com sucesso</br>";
        }

		public function getMatricula(){

			return $this->matr;
			
		}

		public function setMatricula($matr){

			$this->matr = $matr;
			
		}

        public function getCurso(){

            return $this->curso;

        }

        public function setCurso($curso){

            $this->curso = $curso;

        }
    }
?>