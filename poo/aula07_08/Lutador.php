<?php
    require_once "InterfaceLutador.php";

    class Lutador implements InterfaceLutador{

        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        function __construct($no,$na,$id,$al,$pe,$vi,$de,$em){
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($id);
            $this->setAltura($al);
            $this->setPeso($pe);
            $this->setVitorias($vi);
            $this->setDerrotas($de);
            $this->setEmpates($em);
        }

        function apresentar(){

            echo "</br>---------------------</br>";
            echo "O lutador {$this->getNome()} </br>";
            echo "Vindo de {$this->getNacionalidade()} </br>";
            echo "Com {$this->getIdade()} anos de idade </br>";
            echo "Mede {$this->getAltura()} metros </br>";
            echo "Pesando {$this->getPeso()} kilos </br>";
            echo "Tem um cartéu de {$this->getVitorias()} vitória(s),  {$this->getDerrotas()} derrota(s) e {$this->getEmpates()} empate(s) </br>";

        }

        function status(){

            echo "{$this->getNome()} </br>";
            echo "É um peso {$this->getCategoria()} </br>";
            echo "{$this->getVitorias()} vitória(s) </br>";
            echo "{$this->getDerrotas()} derrota(s) </br>";
            echo "{$this->getEmpates()} empate(s) </br>";

        }

        function ganharLuta(){
            $this->setVitorias($this->getVitorias()+1);
        }

        function perderLuta(){
            $this->setDerrotas($this->getDerrotas()+1);
        }
        
        function empatarLuta(){ 
            $this->setEmpates($this->getEmpates()+1);
        }


		public function getNome(){

			return $this->nome;
			
		}

		public function setNome($nome){

			$this->nome = $nome;
			
		}

		public function getNacionalidade(){

			return $this->nacionalidade;
			
		}

		public function setNacionalidade($nacionalidade){

			$this->nacionalidade = $nacionalidade;
			
		}

		public function getIdade(){

			return $this->idade;
			
		}

		public function setIdade($idade){

			$this->idade = $idade;
			
		}

		public function getAltura(){

			return $this->altura;
			
		}

		public function setAltura($altura){

			$this->altura = $altura;
			
		}

		public function getPeso(){

			return $this->peso;
			
		}

		public function setPeso($peso){

			$this->peso = $peso;
            $this->setCategoria($peso);
			
		}

		public function getCategoria(){

			return $this->categoria;
			
		}

		public function setCategoria($peso){

			if($peso < 52.2){

                $this->categoria = "Inválido";	

            }elseif($peso <= 70.3){

                $this->categoria = "Leve";	

            }elseif($peso <= 83.9){

                $this->categoria = "Médio";

            }elseif($peso <= 120.2){

                $this->categoria = "Pesado";

            }else{

                $this->categoria = "Inválido";

            }
            
		}

		public function getVitorias(){

			return $this->vitorias;
			
		}

		public function setVitorias($vitorias){

			$this->vitorias = $vitorias;
			
		}

		public function getDerrotas(){

			return $this->derrotas;
			
		}

		public function setDerrotas($derrotas){

			$this->derrotas = $derrotas;
			
		}

		public function getEmpates(){

			return $this->empates;
			
		}

		public function setEmpates($empates){

			$this->empates = $empates;
			
		}
    }
?>