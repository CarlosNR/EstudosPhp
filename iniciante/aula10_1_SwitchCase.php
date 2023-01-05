<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
        
            $numero = isset($_POST["numero"]) ? (int)trim($_POST["numero"]) : 1;

            $op = isset($_POST["oper"]) ? (int)trim($_POST["oper"]) : 1;

            switch ($op){
                case 1:
                    $numero *=2;
                    break;
                case 2:
                    $numero = pow($numero,3);
                    // poderia ser $numero ^=3;
                    break;
                case 3:
                    $numero = round(sqrt($numero),2);
                break;
            }
            
            echo $numero;
        ?>
        
        </br>

        <form action="../../html/iniciante/aula10_1.html">
            <input type="submit" value="Voltar" />
        </form>
            
        <!-- <a href="../../html/iniciante/aula08.html">
            <button>Voltar</button>
        </a> -->
    </div> 

</body>
</html>
