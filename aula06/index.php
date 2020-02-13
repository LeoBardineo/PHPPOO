<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 06 - POO</title>
</head>
<body>
<h1>Projeto Controle Remoto</h1>
<pre>
    <?php
        require_once 'ControleRemoto.php';

        $c = new ControleRemoto();
        $c->ligarDesligar();
        $c->abrirFecharMenu();
    ?>
</pre>
</body>
</html>