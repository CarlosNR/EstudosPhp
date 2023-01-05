<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php

            $x = isset($_POST["numero1"]) ? (int)trim($_POST["numero1"]) : 1;
            $y = isset($_POST["numero2"]) ? (int)trim($_POST["numero2"]) : 1;
            $passo = isset($_POST["passo"]) ? (int)trim($_POST["passo"]) : 1;
            $cont = $x;

            if ($x <= $y){
                
                while ($cont < $y){
                    echo $cont."</br>";
                    $cont += $passo;
                }

            }else{

                while ($cont >= $y){
                    echo $cont."</br>";
                    $cont -= $passo;
                }
                
            }
        ?>
    </div> 

</body>
</html>
