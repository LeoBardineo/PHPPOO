<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 14 - PHP POO</title>
</head>
<body>
    <?php
        spl_autoload_register(function ($class_name){
            require_once $class_name.'.php';
        });

        $v[0] = new Video("Aula 1 de PHP POO");
        $v[1] = new Video("Aula 12 de PHP Procedural");
        $v[2] = new Video("Aula 15 de HTML5");

        print_r($v);

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "Juba");

        print_r($g);
    ?>
</body>
</html>