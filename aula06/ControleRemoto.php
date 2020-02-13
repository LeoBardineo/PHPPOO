<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    // Atributos
    private $volume;
    private $volumeAnterior;
    private $ligado;
    private $tocando;
    private $menuFechado;

    // Construtor
    public function __construct(){
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
        $this->setMenuFechado(true);
    }

    // Métodos da classe
    public function ligarDesligar(){
        if($this->getLigado()){ // Se estiver ligado, ele irá desligar
            $this->setLigado(false);
        }else{ // Se estiver desligado, ele irá ligar
            $this->setLigado(true);
        }
    }

    public function abrirFecharMenu(){
        if($this->getMenuFechado()){ // Se o menu estiver fechado, ele irá abrir
            echo '= = = = = = MENU = = = = = = <br>';
            echo 'Ligado: '. ($this->getLigado()?'Sim':'Não') .'<br>';
            echo 'Tocando: '. ($this->getTocando()?'Sim':'Não') .'<br>';
            echo 'Volume: '.$this->getVolume().'<br>';
            echo '[';
            for ($i=0; $i <= $this->getVolume(); $i+=5) {
                echo '#';
                if($i==$this->getVolume() && $i!=100){
                    for ($i; $i <= 100; $i+=5) {
                        echo '=';
                    }
                }
            }
            echo ']<br>';
        }else{
            echo 'Fechando menu... <br>';
        }
    }

    public function maisVolume(){
        if($this->getLigado()){
            if($this->getVolume() < 100){
                $this->setVolume($this->getVolume() + 5);
            }else{
                echo 'Volume máximo alcançado! <br>';
            }
        }else{
            echo 'Erro! Ele está desligado! <br>';
        }
    }

    public function menosVolume(){
        if($this->getLigado()){
            if($this->getVolume() >= 0){
                $this->setVolume($this->getVolume() - 5);
            }else{
                echo 'Volume mínimo alcançado! <br>';
            }
        }else{
            echo 'Erro! Ele está desligado! <br>';
        }
    }

    public function ligarDesligarMudo(){
        if($this->getLigado()){
            if($this->getVolume() > 0){
                $this->setVolumeAnterior($this->getVolume());
                $this->setVolume(0);
                echo 'Mudo ligado. <br>';
            }else{
                $this->setVolume($this->getVolumeAnterior());
                echo 'Mudo desligado. <br>';
            }
        }else{
            echo 'Erro! Ele está desligado! <br>';
        }
    }

    public function playPause(){
        if($this->getLigado()){
            if($this->getTocando()){
                $this->setTocando(false);
            }else{
                $this->setTocando(true);
            }
        }else{
            echo 'Erro! Ele está desligado! <br>';
        }
    }

    // Métodos especiais
    private function getVolume(){
        return $this->volume;
    }

    private function setVolume($v){
        $this->volume = $v;
    }

    private function getLigado(){
        return $this->ligado;
    }

    private function setLigado($l){
        $this->ligado = $l;
    }

    private function getTocando(){
        return $this->tocando;
    }

    private function setTocando($t){
        $this->tocando = $t;
    }

    private function getMenuFechado(){
        return $this->menuFechado;
    }

    private function setMenuFechado($MF){
        $this->menuFechado = $MF;
    }

    private function getVolumeAnterior(){
        return $this->volumeAnterior;
    }

    private function setVolumeAnterior($VA){
        $this->volumeAnterior = $VA;
    }
}

?>