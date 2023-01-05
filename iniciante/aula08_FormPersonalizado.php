<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">

    <?php
    
        $txt = isset($_POST["texto"]) ? trim($_POST["texto"]) : "Texto genérico";

        $tam = isset($_POST["tam"]) ? trim($_POST["tam"]) : "14pt";

        $cor = isset($_POST["cor"]) ? trim($_POST["cor"]) : "#000000";

    ?>

    <!-- estilo local -->
    <style>
        /* 
            tag.classe 
            um ";" pro php e outro pro css
        */
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>

</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
    </div>   
</body>
</html>
