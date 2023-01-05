<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
        
            $num = isset($_POST["numero"]) ? (int)trim($_POST["numero"]) : 1;
            if($num > 1){
                $fat = 1;

                do{
                    $fat *= $num;
                    $num--;
                }while($num>=1);
            
                echo $fat;
            }elseif ($num == 1 || $num==0){
                echo 1;
            }else{
                echo "Valor negativo. Favor por um positivo";
            }
        ?>
        <!-- volte 1 pg do histórico de navegação -->
        </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>

    </div> 

</body>
</html>
