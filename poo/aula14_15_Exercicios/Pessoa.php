<?php
    abstract class Pessoa{
        
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        //teoricamente era pra ser protected, mas da erro
        public function __construct($nome, $idade, $sexo){

                $this->setNome($nome);
                $this->setIdade($idade);
                $this->setSexo($sexo);
                $this->setExperiencia(0);

        }

        protected function ganharExp(){
            
            $this->setExperiencia($this->getExperiencia()+5);

            if(is_int($this->getExperiencia()/10)){
                echo "</br>Parabéns, tu subiu de nivel</br>";
            }
            echo "</br>Ganhou 5 de exp!</br>";
            

        }


		public function getNome(){

			return $this->nome;
			
		}

		public function setNome($nome){

			$this->nome = $nome;
			
		}

		public function getIdade(){

			return $this->idade;
			
		}

		public function setIdade($idade){

			$this->idade = $idade;
			
		}

		public function getSexo(){

			return $this->sexo;
			
		}

		public function setSexo($sexo){

			$this->sexo = $sexo;
			
		}

		public function getExperiencia(){

			return $this->experiencia;
			
		}

		public function setExperiencia($experiencia){

			$this->experiencia = $experiencia;
			
		}
    }
?>