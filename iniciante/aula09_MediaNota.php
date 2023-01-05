<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php

            $nota1 = isset($_POST["nota1"]) ? trim($_POST["nota1"]) : 0;
            $nota2 = isset($_POST["nota2"]) ? trim($_POST["nota2"]) : 0;

            $media = ($nota1+$nota2)/2;

            if($media>=7){
            echo "aprovado";
            }elseif ($media < 7 && $media >=5){
            echo "recuperação";
            }else{
            echo "reprovado";
            }

        ?>
        
        </br>

        <form action="../../html/iniciante/aula09_MediaNota.html">
            <input type="submit" value="Voltar" />
        </form>
            
        <!-- <a href="../../html/iniciante/aula08.html">
            <button>Voltar</button>
        </a> -->
    </div> 

    


</body>
</html>
