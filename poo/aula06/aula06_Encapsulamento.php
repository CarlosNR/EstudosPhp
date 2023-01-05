<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        pre {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <pre>
        <?php

            // é hp
            // encapsulamento (abstração dentro do encapsulamento)

                // interface: comunicação com meio externo

                // proteger codigo do programador e programador do codigo

                // vantagens: 
                // tornar mudanças invisiveis
                // facilitar reutilização de código
                // reduzir efeitos colaterais

            // herança
            // polimorfismo
            
            require_once "ControleRemoto.php";

            $c1 = new ControleRemoto();
            
            $c1->maisVolume();
            $c1->ligar();
            $c1->maisVolume();
            $c1->play();
            $c1->abrirMenu();

        ?>
    </pre>
</body>
</html>