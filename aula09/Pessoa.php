<?php

class Pessoa{
    private $nome, $idade, $sexo;

    public function __construct($n, $i, $s){
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo($s);
    }

    public function fazerAniver(){
        $this->idade ++;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($n){
        $this->nome = $n;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($i){
        $this->idade = $i;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($s){
        $this->sexo = $s;
    }
}

?>