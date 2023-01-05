<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            //metodo acessor: getter

            //metodo modificador/mutante: setter

            //metodo construtor: __construct ou nome da classe

            require_once "Caneta.php";

            $c1 = new Caneta("Bic", "Preta",0.5);
            $c2 = new Caneta("Bic", "Preta",0.5);
            // $c1->setPonta(0.5);
            // $c1->setModelo("Bic");

            //vai da ruim
            //$c1->ponta = 0.5;

            print_r($c1);
            print_r($c2);


            echo "Esta caneta tem ponta {$c1->getPonta()} e é da marca {$c1->getModelo()}.</br>";

        ?>
    </pre>
</body>
</html>