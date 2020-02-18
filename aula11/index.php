<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - PHP POO</title>
</head>
<body>
    <?php

        require_once 'Aluno.php';
        require_once 'Bolsista.php';

        $a1 = new Aluno();
        $b1 = new Bolsista();

        $a1->setNome("Pedro");
        $a1->setMatr(1111);
        $a1->pagarMensalidade();

        $b1->setNome("Jubileu");
        $b1->setMatr(1112);
        $b1->setBolsa(12.5);
        $b1->setCurso("Admnistração");
        $b1->setIdade(17);
        $b1->pagarMensalidade();

        var_dump($a1);
        var_dump($b1);

        // for ($i=1; $i <= 4; $i++) { 
        //     $p = "p";
        //     $p = $p.$i;
        //     var_dump($$p);
        //     echo "<hr>";
        // }
    ?>
</body>
</html>