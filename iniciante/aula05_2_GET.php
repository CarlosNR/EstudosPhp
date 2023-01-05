<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
            // apos .php no navegador, adicionar ?a=3&b=2
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];

            $resp = $n1 / $n2;
            echo "divisão vale $resp <br>";

            $resp = $n1 % $n2;
            echo "divisao inteira vale $resp";

        ?>
    </div> 
</body>
</html>
