<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = 5;
            
            //serve pra + - * / e %
            $a += $b;
            echo $a;
            
            echo "</br>";

            $a = 3;
            $b = 5;
            
            // nao funciona em php, faz com q $a receba 5 e ignora o +
            $a =+ $b;
            echo $a;

            echo "</br>";

            $c = "Esta frase esta ";
            $d = "incompleta.";
            $c .= $d;
            echo $c;

            echo "</br>";

            $e = 100;
            echo "Valor original é ".number_format($e,2,",",".").".</br>";
            $e *= 1.1;
            echo "Com aumento ficou R$ ".number_format($e,2,",",".").".</br>";

            echo "<h3>Posincremento</h3>";
            
            $a = 5;
            echo "deve ser 5: " . $a++ . "<br />\n";
            echo "deve ser 6: " . $a . "<br />\n";

            echo "<h3>Preincremento</h3>";
            $a = 5;
            echo "deve ser 6: " . ++$a . "<br />\n";
            echo "deve ser 6: " . $a . "<br />\n";

            echo "<h3>Posdecremento</h3>";
            $a = 5;
            echo "deve ser 5: " . $a-- . "<br />\n";
            echo "deve ser 4: " . $a . "<br />\n";

            echo "<h3>Predecremento</h3>";
            $a = 5;
            echo "deve ser 4: " . --$a . "<br />\n";
            echo "deve ser 4: " . $a . "<br />\n";
        ?>
    </div> 
</body>
</html>
