<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
        
            $d = isset($_POST["ds"]) ? (int)trim($_POST["ds"]) : 0;

            switch ($d){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Vai estuda cassete.";
                    break;
                case 7:
                case 1:
                    echo "Folga ;)";
                    break;
                default:
                    echo "Dia invalido.";
            }

            
        ?>
        <!-- volte 1 pg do histórico de navegação -->
        </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>

    </div> 

</body>
</html>
