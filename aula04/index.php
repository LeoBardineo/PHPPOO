<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 04 - POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta("BIC", "Azul", "0.5");
        echo 'Eu tenho uma caneta '.$c1->getModelo().' de ponta '.$c1->getPonta();
        echo '<br><br>';
        print_r($c1);
    ?>
    </pre>
</body>
</html>