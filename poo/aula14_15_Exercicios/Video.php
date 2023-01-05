<?php
    require_once "AcoesVideo.php";
    
    class Video implements AcoesVideo{

        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;
        
        function play(){
            $this->reproduzindo = true;
        }

        function pause(){
            $this->reproduzindo = false;
        }
        
        function like(){
            $this->curtidas++;
        }

        function __construct($titulo){
            $this->titulo = $titulo;
            $this->setAvaliacao(1);
            $this->views = 0;
            $this->setCurtidas(0);
            $this->reproduzindo = false;
        }

		public function getTitulo(){

			return $this->titulo;
			
		}

		public function setTitulo($titulo){

			$this->titulo = $titulo;
			
		}

		public function getAvaliacao(){

			return $this->avaliacao;
			
		}

		public function setAvaliacao($avaliacao){
			// para evitar bug de warning no php, bota-se if inutil
			if($this->getViews() > 0){
				$media = ($this->avaliacao + $avaliacao)/$this->views;
				$this->avaliacao = $media;	
			}
			
		}

		public function getViews(){

			return $this->views;
			
		}

		public function setViews($views){

			$this->views = $views;
			
		}

		public function getCurtidas(){

			return $this->curtidas;
			
		}

		public function setCurtidas($curtidas){

			$this->curtidas = $curtidas;
			
		}

		public function getReproduzindo(){

			return $this->reproduzindo;
			
		}

		public function setReproduzindo($reproduzindo){

			$this->reproduzindo = $reproduzindo;
			
		}

    }
?>
