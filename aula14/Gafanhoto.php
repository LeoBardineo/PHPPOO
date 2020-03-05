<?php

require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
    private $login, $totAssistido;

    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function viuMaisUm(){
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getTotAssistido(){
        return $this->totAssistido;
    }

    public function setTotAssistido($totAssistindo){
        $this->totAssistido = $totAssistindo;
    }

}

?>