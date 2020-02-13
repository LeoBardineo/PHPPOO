<?php

class Luta{
    // Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    // Métodos da classe
    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }else{
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }

    public function lutar(){
        if($this->getAprovada()){
            echo "<h3>Desafiado: </h3><br>";
            $this->getDesafiado()->apresentar();
            echo "<br><h3>Desafiante: </h3><br>";
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 1: // Ganhou Desafiado
                    echo "<br><h3>".$this->getDesafiado()->getNome()." ganhou!</h3>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                
                case 2: // Ganhou Desafiante
                    echo "<br><h3>".$this->getDesafiante()->getNome()." ganhou!</h3>";
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                    break;

                default: // 0 = Empate
                    echo "<br><h3>Empatou!</h3>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    
                    break;
            }
        }else{
            echo "Essa luta não pode acontecer";
        }
    }

    // Métodos especiais
    public function getDesafiado(){
        return $this->desafiado;
    }

    public function setDesafiado($d){
        $this->desafiado = $d;
    }
    
    public function getDesafiante(){
        return $this->desafiante;
    }

    public function setDesafiante($d){
        $this->desafiante = $d;
    }

    public function getRounds(){
        return $this->rounds;
    }

    public function setRounds($r){
        $this->rounds = $r;
    }

    public function getAprovada(){
        return $this->aprovada;
    }

    public function setAprovada($a){
        $this->aprovada = $a;
    }

}

?>