<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Aula 07 - POO</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .everything{
            padding: 20px;
        }

        .container{
            display: flex;
            flex-direction: row;
        }

        .container-left{
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <div class="everything">
        <h1>Ultimate Emoji Combat</h1>
        <pre>
        <?php
            require_once 'Luta.php';
            require_once 'Lutador.php';

            $l = array();
            $l[0] = new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 3, 1);
            $l[1] = new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador('Snapshadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador('Dead Code', 'Austrália', 28, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador('Nerdaard', 'EUA', 30, 1.81, 105.7, 12, 2, 4);
        ?>
        <div class="container">
            <div>
                <h2>Apresentação</h2>
                <?php
                    foreach ($l as $key => $value) {
                        $l[$key]->apresentar();
                    }
                ?>
            </div>
            <div class="container-left">
                <h2>Status</h2>
                <?php
                    foreach ($l as $key => $value) {
                        $l[$key]->status();
                    }
                ?>
            </div>
            <div class="container-left">
                <h2>Luta</h2>
                <?php
                    $UEC01 = new Luta();
                    $UEC01->marcarLuta($l[0], $l[1]);
                    $UEC01->lutar();
                    ?>
            </div>
            <div class="container-left">
                <h2>Status após a luta</h2>
                <?php
                    foreach ($l as $key => $value) {
                        $l[$key]->status();
                    }
                ?>
            </div>
        </div>
        </pre>
    </div>
</body>

</html>