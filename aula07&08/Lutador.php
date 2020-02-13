<?php
require_once 'LutadorInterface.php';
class Lutador implements LutadorInterface{
    // Atributos
    private $nome, $nacionalidade, $idade, $altura, $peso, $categoria;
    private $vitorias, $derrotas, $empates;

    // Construtor
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    // Métodos da classe
    public function apresentar(){
        echo "<p>-----------------------------------</p>";
        echo "Lutador: ".$this->getNome()."<br>";
        echo "Origem: ".$this->getNacionalidade()."<br>";
        echo "Idade: ".$this->getIdade()." anos <br>";
        echo "Altura: ".$this->getAltura()." m <br>";
        echo "Pesando ".$this->getPeso()." kg <br>";
        echo "Ganhou: ".$this->getVitorias()."<br>";
        echo "Perdeu: ".$this->getDerrotas()."<br>";
        echo "Empatou: ".$this->getEmpates()."<br>";
    }
    
    public function status(){
        echo "<p>-----------------------------------</p>";
        echo $this->getNome();
        echo " é um peso ".$this->getCategoria()."<br>";
        echo $this->getVitorias()." vitórias <br>";
        echo $this->getDerrotas()." derrotas <br>";
        echo $this->getEmpates()." empates <br>";
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);        
    }
    
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    // Métodos especiais
    public function getNome(){
        return $this->nome;
    }

    public function setNome($n){
        $this->nome = $n;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function setNacionalidade($n){
        $this->nacionalidade = $n;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($t){
        $this->idade = $t;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($a){
        $this->altura = $a;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($p){
        $this->peso = $p;
        $this->setCategoria($p);
    }
    
    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($p){
        if($p < 52.2){
            $this->categoria = "Inválido";
        }else if($p <= 70.3){
            $this->categoria = "Leve";
        }else if($p <= 83.9){
            $this->categoria = "Médio";
        }else if($p <= 120.9){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function setVitorias($v){
        $this->vitorias = $v;
    }

    public function getDerrotas(){
        return $this->Derrotas;
    }

    public function setDerrotas($d){
        $this->Derrotas = $d;
    }

    public function getEmpates(){
        return $this->empates;
    }

    public function setEmpates($e){
        $this->empates = $e;
    }
}

?>