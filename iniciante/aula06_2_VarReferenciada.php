<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
            //Var referenciada
            $a = 3;
            $b = &$a;

            $b += $b;

            echo $a."</br>";

            //Variaveis de variaveis

            $site = "curso em video";
            $$site = "cursodephp";

            echo 'Echo de $site é: '.$site."</br>";
            echo 'Echo de $$site é: '.${$site}."</br>";
            echo 'Echo de $cursoemvideo é: '.${"curso em video"}."</br>";
            // $cursodephp não existe

            echo "</br>";
            
            $cursoemvideo = "cursodeJAVA";
            echo 'Echo de $site é: '.$site."</br>";
            echo 'Echo de $$site é: '.${$site}."</br>";
            echo 'Echo de $cursoemvideo é: '.$cursoemvideo."</br>";
        ?>
    </div> 
</body>
</html>
