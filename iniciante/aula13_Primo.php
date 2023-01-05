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
            $chave = false;

            $y=($x-1);
            
            for($y; $y>1 ; $y--){

                $resp = $x/$y;

                if(is_int($resp) == 1){
                    echo "Não é primo";
                    $chave = true;
                    break;
                }

            } 

            if ($chave === false){
                echo "É primo";
            }
        ?>
        <!-- volte 1 pg do histórico de navegação -->
        </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div> 

</body>
</html>
