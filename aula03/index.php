<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 03 - POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "BIC Cristal";
        $c1->cor = "Azul";
        $c1->destampar();
        $c1->rabiscar();
        $c1->tampar();
        print_r($c1);
    ?>
    </pre>
</body>
</html>