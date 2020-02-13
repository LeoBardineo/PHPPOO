<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 02 - POO</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';
        //Instanciando a classe
        $c1 = new Caneta;

        //Atributos
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;

        //Métodos
        $c1->tampar();
        $c1->rabiscar();
        $c1->destampar();
        $c1->rabiscar();

        //Printa os atributos do objeto
        var_dump($c1);

        echo "<br>";

        $c2 = new Caneta;
        $c2->cor = "Verde";
        $c2->ponta = 50.0;
        $c2->tampar();
        var_dump($c2);
    ?>
</body>
</html>