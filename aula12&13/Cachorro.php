<?php

require_once 'Lobo.php';
class Cachorro extends Lobo{
    public function emitirSom(){
        echo "Au au au";
    }

    public function enterrarOsso(){
        echo "Enterrando Osso";
    }

    public function abanarRabo(){
        echo "Abanando o Rabo";
    }

    public function reagirFrase($frase){
        if($frase == "amigável"){
            echo "Abanar e Latir";
            echo "<br>";
        }else{
            echo "Rosnar";
            echo "<br>";
        }
    }

    public function reagirHora($hora){
        if($hora < 12){
            echo "Abanar";
            echo "<br>";
        }else if($hora >= 18){
            echo "Ignorar";
            echo "<br>";
        }else{
            echo "Abanar e Latir";
            echo "<br>";
        }
    }

    public function reagirDono($dono){
        if($dono){
            echo "Abanar";
            echo "<br>";
        }else{
            echo "Rosnar e latir";
            echo "<br>";
        }
    }

    public function reagirIdadePeso($idade, $peso){
        if($idade < 5){
            if($peso < 10){
                echo "Abanar";
                echo "<br>";
            }else{
                echo "Latir";
                echo "<br>";
            }
        }else{
            if($peso < 10){
                echo "Rosnar";
                echo "<br>";
            }else{
                echo "Ignorar";
                echo "<br>";
            }
        }
    }
}

?>