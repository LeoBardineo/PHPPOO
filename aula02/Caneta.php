<?php

class Caneta{
    // Atributos
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    // Metodos
    function rabiscar(){
        if($this->tampada == true){
            echo "<p>Não posso rabiscar, a caneta está tampada!</p>";
        }else{
            echo "<p>Estou rabiscando</p>";
        }
    }
    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
}