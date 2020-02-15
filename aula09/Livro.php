<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';
class Livro implements Publicacao{
    private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;

    public function __construct($t, $a, $tot, $le){
        $this->setTitulo($t);
        $this->setAutor($a);
        $this->setTotPaginas($tot);
        $this->setLeitor($le);
        $this->setPagAtual(0);
        $this->setAberto(false);
    }

    public function detalhes(){
        echo "<hr>";
        echo "<br> Livro ". $this->getTitulo() . " escrito por " . $this->getAutor();
        echo "<br> Páginas: ". $this->getTotPaginas();
        echo "<br> Página atual: ". $this->getPagAtual();
        echo "<br> Livro aberto: "; 
        echo $this->getAberto() ? "Sim" : "Não";
        echo "<br> Sendo lido por: ". $this->getLeitor()->getNome();
    }

    public function toggleAbrirFechar(){
        if($this->getAberto() == false){
            $this->setAberto(true);
        }else{
            $this->setAberto(false);
        }
    }

    public function folhear($p){
        if($p > $this->getTotPaginas() || $p < 0){
            $this->setPagAtual(0);
        }else{
            $this->setPagAtual($p);
        }
    }

    public function avancarPag(){
        if($this->getPagAtual() == $this->getTotPaginas()){
            echo "Página final alcançada, não foi possível avançar de página. <br>";
        }else{
            $this->setPagAtual($this->getPagAtual()+1);
        }
    }
    
    public function voltarPag(){
        if($this->getPagAtual() == 0){
            echo "Página inicial alcançada, não foi possível voltar de página. <br>";
        }else{
            $this->setPagAtual($this->getPagAtual()-1);
        }
    }

    public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($t){
		$this->titulo = $t;
	}

	public function getAutor(){
		return $this->autor;
	}

	public function setAutor($a){
		$this->autor = $a;
	}

	public function getTotPaginas(){
		return $this->totPaginas;
	}

	public function setTotPaginas($tot){
		$this->totPaginas = $tot;
	}

	public function getPagAtual(){
		return $this->pagAtual;
	}

	public function setPagAtual($pag){
		$this->pagAtual = $pag;
	}

	public function getAberto(){
		return $this->aberto;
	}

	public function setAberto($ab){
		$this->aberto = $ab;
	}

	public function getLeitor(){
		return $this->leitor;
	}

	public function setLeitor($le){
		$this->leitor = $le;
	}
}

?>