<?php

interface Publicacao{
    public function toggleAbrirFechar();
    public function folhear($p);
    public function avancarPag();
    public function voltarPag();
}

?>