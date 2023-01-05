<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
            /*operador ternário
                expressão ? valor pra vdd : valor pra falso;
            */
            $a = 2;
            $b= 4;

            echo $a < $b ? "sim" : "não";
            
            echo "</br>";

            $a = 3;
            $b= 2;

            $result = $a < $b ? "sim" : "não";
            echo $result;

            // operadores logicos
            /*
                && and  -> e
                ||      -> ou
                xor     -> xor 
            */
        ?>
    </div> 
</body>
</html>
