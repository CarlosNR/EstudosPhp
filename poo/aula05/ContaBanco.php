<?php
    class ContaBanco{

        public $numConta;
        protected $tipo;
        private $saldo;
        private $dono;
        private $status;

        public function __construct(){
            $this->saldo = 0;
            $this->status = false;
            echo "Conta criada com sucesso<br>";
        }

        public function abrirConta($tipo){

            $this->tipo = $tipo;
            $this->status = true;

            if($tipo == "cc"){
                $this->saldo = 50;
            }elseif($tipo == "cp"){
                $this->saldo = 150;
            }

        }

        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>Ainda há saldo na conta, favor tratar pendencia antes de continuar<br></p>";
            }elseif($this->getSaldo() < 0){
                echo "<p>Saldo negativo, favor tratar pendencia antes de continuar<br></p>";
            }else{
                $this->setStatus = false;
                echo "Conta de {$this->getDono()} foi fechada com sucesso<br>";
            }
        }
 
        public function pagarMensal(){
            if ($this->getTipo() == "cc"){
                $v = 12;
            }elseif($this->getTipo() == "cp"){
                $v = 20;
            }

            if ($this->getStatus()){
                if ($this->getSaldo() > 0){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Mensalidade de $v paga com sucesso na conta de {$this->getDono()}<br></p>";
                }else{
                    echo "Conta com saldo insuficiente, não dá para cobrar mensalidade<br>";
                }
            }else{
                echo "conta desativada";
            }
        }

	
        public function sacar($saque){
            
            if ($this->getStatus()){
                if ($this->getSaldo() < $saque){
                    echo "<p>Saldo insuficiente para sacar<br></p>";
                }else{
                    $this->setSaldo($this->getSaldo()-$saque);
                    echo "<p>Saque de $saque realizado com sucesso na conta de {$this->getDono()}<br></p>";
                }
            }else{
                echo "<p>Conta desativada, impossivel sacar<br></p>";
            }
            
        }

        public function depositar($deposito){
            if ($this->getStatus()){
                $this->saldo += $deposito;
                echo "<p>Deposito de $deposito realizado com sucesso na conta de {$this->getDono()}<br></p>";
            }else{
                echo "Operação invalida, conta desativada<br>";
            }
            
        }

        //getters e setter
		public function getNumConta(){

			return $this->numConta;
			
		}

		public function setNumConta($numConta){

			$this->numConta = $numConta;
			
		}

		public function getTipo(){

			return $this->tipo;
			
		}

		public function setTipo($tipo){

			$this->tipo = $tipo;
			
		}

		public function getSaldo(){

			return $this->saldo;
			
		}

		public function setSaldo($saldo){

			$this->saldo = $saldo;
			
		}

		public function getDono(){

			return $this->dono;
			
		}

		public function setDono($dono){

			$this->dono = $dono;
			
		}

		public function getStatus(){

			return $this->status;
			
		}

		public function setStatus($status){

			$this->status = $status;
			
		}
    }
?>