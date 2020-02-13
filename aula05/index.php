<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 05 - POO</title>
</head>
<body>
    <?php
        require_once 'ContaBanco.php';

        $p1 = new ContaBanco();
        $p2 = new ContaBanco();

        $p1->abrirConta('cc');
        $p1->setDono('Jubileu');
        $p1->setNumConta(1111);
        
        $p2->abrirConta('cp');
        $p2->setDono('Creuza');
        $p2->setNumConta(2222);

        $p1->depositar(300);
        $p2->depositar(500);

        $p1->sacar(100);
        $p2->sacar(100);

        $p1->pagarMensal();
        $p2->pagarMensal();

        $p2->sacar(1000);

        $p1->fecharConta();

        $p1->sacar($p1->getSaldo());
        $p2->sacar($p2->getSaldo());

        $p1->fecharConta();
        $p2->fecharConta();

        echo '<pre>';
        var_dump($p1);
        var_dump($p2);
        echo '</pre>';
    ?>
</body>
</html>