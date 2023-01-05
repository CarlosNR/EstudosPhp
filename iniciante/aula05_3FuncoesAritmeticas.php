<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
            $v1 = -2;
            $v2 = 4;
            $v3= 3.4;
            $v4= 3.5;
            $v5= 3.9;
            $v6 = 7.8754632784;
            $v7 = 8000;
            
            echo "O valor absoluto de $v1 é ".abs($v1)."</br>";

            echo "Potencia de ($v1)<sup>$v2</sup> é ".pow($v1, $v2)."</br>";

            echo "A raiz de $v2 é ".sqrt($v2)."</br>";

            echo "A parte inteira de $v3 é ".intval($v3)."</br>";

            echo "O valor de $v6 em unidade monetaria é ".number_format($v6, 2)."</br>";

            // number_format (valor, nº de casas decimais, separador de centavos, separador de milhar)
            echo "O valor de $v7 em unidade monetaria é R$".number_format($v7, 2, ",", ".")."</br></br>";

            echo "O valor round de $v3 é ".round($v3)."</br>";
            echo "O valor round de $v4 é ".round($v4)."</br>";
            echo "O valor round de $v5 é ".round($v5)."</br></br>";

            echo "O valor ceil de $v3 é ".ceil($v3)."</br>";
            echo "O valor ceil de $v4 é ".ceil($v4)."</br>";
            echo "O valor ceil de $v5 é ".ceil($v5)."</br></br>";

            echo "O valor floor de $v3 é ".floor($v3)."</br>";
            echo "O valor floor de $v4 é ".floor($v4)."</br>";
            echo "O valor floor de $v5 é ".floor($v5)."</br>";

        ?>
    </div> 
</body>
</html>
