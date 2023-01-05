<?php
    require_once "Aluno.php";
    class Bolsista extends Aluno{

       private $bolsa;

        function renovarBolsa(){
            echo "</br>Bolsa renovada </br>";
        }

        function pagarMensalidade(){
            echo "Mensalidade do bolsista {$this->getNome()} paga com sucesso</br></br>";
        }


		public function getBolsa(){

			return $this->bolsa;
			
		}

		public function setBolsa($bolsa){

			$this->bolsa = $bolsa;
			
		}
    }
?>