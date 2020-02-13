<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<body>
    <form id="caneta" method="post" action="comHTML.php">
        <input type="text" name="modelo" placeholder="Digite o modelo da caneta."/>
        <input type="text" name="cor" placeholder="Digite a cor da caneta."/>
        <input type="number" name="ponta" step="0.01" placeholder="Digite a ponta da caneta."/>
        <input type="submit" value="Criar"/>
    </form>
    <pre>

        <?php
            require_once 'Caneta.php';
            $modelo = isset($_POST['modelo'])?$_POST['modelo']:'';
            $cor = isset($_POST['cor'])?$_POST['cor']:'';
            $ponta = isset($_POST['ponta'])?$_POST['ponta']:'';

            if(!empty($modelo && $cor && $ponta)){
                $c1 = new Caneta($modelo, $cor, $ponta);
                echo 'Eu tenho uma caneta '.$c1->getModelo().' de ponta '.$c1->getPonta().' e de cor '.$c1->getCor(). ' e ela está '; echo $c1->getTampada()?'tampada':'destampada';
                var_dump($c1);
            }else{
                echo "<h3>Digite os dados para criar a sua caneta.</h3>";
            }
        ?>

    </pre>
    </body>