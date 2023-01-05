<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
            $valor = trim($_POST["valor"]);
            echo "A raiz quadrada é ".number_format(sqrt($valor),2);

        ?>
        
        </br>

        <form action="../../html/iniciante/aula08.html">
            <input type="submit" value="Voltar" />
        </form>
            
        <!-- <a href="../../html/iniciante/aula08.html">
            <button>Voltar</button>
        </a> -->
    </div> 

    


</body>
</html>
