<?php
	//não permite instancia de pessoa generica ($P[0] = new Pessoa)
    abstract class Pessoa{
        
        private $nome;
        private $idade;
        private $sexo;

		// nao permite q classes herdeiras modifiquem este metodo
       	final public function fazerAniv(){
            $this->idade++;
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
    }
?>