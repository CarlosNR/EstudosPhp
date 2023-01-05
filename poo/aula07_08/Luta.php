<?php
    require_once "InterfaceLuta.php";
    require_once "Lutador.php";

    class Luta{
        //instanciar desafiado e desafiante como instancias de lutador ao inves de string
        //uml uma luta TEM UM (agregação) lutador
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        function marcarLuta($L1, $L2){
            if ($L1->getCategoria() == $L2->GetCategoria() && $L1 != $L2){

                echo "Luta marcadaaaaa! </br>";
                $this->aprovada = true;
                $this->desafiado = $L1;
                $this->desafiante = $L2;
                

            }else{

                echo "Luta inválida, lutadores iguais ou de categorias diferentes </br>";
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;

            }
        }

        function lutar(){

            if($this->aprovada){

                echo "Chegou a hora!! ";
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();

                $vencedor = rand(0,2);
                switch($vencedor){
                    case 0:
                        echo "</br></br>Empate! </br></br>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        $this->desafiado->status();      echo"</br>";
                        $this->desafiante->status();      echo"</br>";

                        break;
                    case 1:
                        echo "</br></br>{$this->desafiado->getNome()} venceu! </br></br>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        $this->desafiado->status();      echo"</br>";
                        $this->desafiante->status();      echo"</br>";

                        break;
                    case 2:
                        echo "</br></br>{$this->desafiante->getNome()} venceu! </br></br>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                        $this->desafiado->status();      echo"</br>";
                        $this->desafiante->status();      echo"</br>";
                        
                        break;
                }

            }
        }

		public function getDesafiado(){

			return $this->desafiado;
			
		}

		public function setDesafiado($desafiado){

			$this->desafiado = $desafiado;
			
		}

		public function getDesafiante(){

			return $this->desafiante;
			
		}

		public function setDesafiante($desafiante){

			$this->desafiante = $desafiante;
			
		}

		public function getRounds(){

			return $this->rounds;
			
		}

		public function setRounds($rounds){

			$this->rounds = $rounds;
			
		}

		public function getAprovada(){

			return $this->aprovada;
			
		}

		public function setAprovada($aprovada){

			$this->aprovada = $aprovada;
			
		}

    }
?>