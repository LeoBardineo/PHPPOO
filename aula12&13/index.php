<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - PHP POO</title>
</head>
<body>
<div>
    <?php
        require_once 'Ave.php';
        require_once 'Mamifero.php';
        require_once 'Peixe.php';
        require_once 'Reptil.php';

        require_once 'Arara.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Goldfish.php';
        require_once 'Tartaruga.php';

        require_once 'Lobo.php';

        $a = new Ave();
        $m = new Mamifero();
        $p = new Peixe();
        $r = new Reptil();

        $ar = new Arara();
        $c = new Canguru();
        $k = new Cachorro();
        $co = new Cobra();
        $g = new Goldfish();
        $t = new Tartaruga();
        
        {
            echo "<h2>Mamífero</h2>";
            $m->setPeso(85.3);
            $m->setIdade(2);
            $m->setMembros(4);
            $m->locomover();
            echo "<br>";
            $m->alimentar();
            echo "<br>";
            $m->emitirSom();
            echo "<br>";
            $m->locomover();
        }
        
        {
            echo "<h2>Peixe</h2>";
            $p->setPeso(0.35);
            $p->setIdade(1);
            $p->setMembros(0);
            $p->locomover();
            echo "<br>";
            $p->alimentar();
            echo "<br>";
            $p->emitirSom();
            echo "<br>";
            $p->soltarBolha();
        }
        
        {
            echo "<h2>Ave</h2>";
            $a->setPeso(0.89);
            $a->setIdade(2);
            $a->setMembros(2);
            $a->locomover();
            echo "<br>";
            $a->alimentar();
            echo "<br>";
            $a->emitirSom();
            echo "<br>";
            $a->fazerNinho();
            
            echo "<h2>Réptil</h2>";
            $r->locomover();
        }

        echo "<h2>Canguru</h2>";
        $c->locomover();
        
        echo "<h2>Cachorro</h2>";
        $k->locomover();
        echo "<br>";
        $k->emitirSom();
        echo "<br>";
        $k->reagirFrase("Olá");
        $k->reagirFrase("Amigável");
        $k->reagirFrase("Sai daqui cachorro");
        $k->reagirDono(true);
        $k->reagirDono(false);
        $k->reagirHora(11, 45);
        $k->reagirHora(21, 00);
        $k->reagirIdadePeso(2, 12.5);
        $k->reagirIdadePeso(17, 4.5);
        
        echo "<h2>Tartaruga</h2>";
        $t->locomover();
        ?>
</div>
</body>
</html>