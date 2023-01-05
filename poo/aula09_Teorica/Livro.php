<?php
    require_once "Pessoa.php";
    require_once "Publicacao.php";

    class Livro implements Publicacao{
        
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        function __construct($titulo, $autor, $totPaginas, $leitor){

            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setLeitor($leitor);
            $this->setPagAtual(0);
            $this->setAberto(false);

        }

        function detalhes(){
            
            echo "O livro {$this->titulo} escrito por $this->autor</br>";
            echo "Páginas: {$this->totPaginas} atual {$this->getPagAtual()}</br>";
            // falha ao transformar objeto em string
            // echo "Sendo lido por: {$this->leitor}</br>";
            echo "Sendo lido por: {$this->leitor->getNome()}</br>";

        }

        function abrir(){
            $this->aberto = true;
        }

        function fechar(){
            $this->aberto = false;
        }

        function folhear($p){
            if (($this->totPaginas < $p) || ($p < 0)){
                echo "pg não existe, voltando para pg 0</br>";
                $this->pagAtual = 0;
            }else{
                $this->pagAtual = $p;
            }
        }

        function avançarPag(){

            if ($this->getTotPaginas() > $this->pagAtual){

                $this->pagAtual ++;

            }else{

                echo "pg não existe, voltando para pg 0</br>";
                $this->pagAtual = 0;

            }
            
        }

        function voltarPag(){
            
            if ($this->pagAtual <= 0){

                echo "pg não existe, voltando para pg 0</br>";
                $this->pagAtual = 0;

            }else{

                $this->pagAtual--;

            }  

        }


		public function getTitulo(){

			return $this->titulo;
			
		}

		public function setTitulo($titulo){

			$this->titulo = $titulo;
			
		}

		public function getAutor(){

			return $this->autor;
			
		}

		public function setAutor($autor){

			$this->autor = $autor;
			
		}

		public function getTotPaginas(){

			return $this->totPaginas;
			
		}

		public function setTotPaginas($totPaginas){

			$this->totPaginas = $totPaginas;
			
		}

		public function getPagAtual(){

			return $this->pagAtual;
			
		}

		public function setPagAtual($pagAtual){

			$this->pagAtual = $pagAtual;
			
		}

		public function getAberto(){

			return $this->aberto;
			
		}

		public function setAberto($aberto){

			$this->aberto = $aberto;
			
		}

		public function getLeitor(){

			return $this->leitor;
			
		}

		public function setLeitor($leitor){

			$this->leitor = $leitor;
			
		}
    }
?>