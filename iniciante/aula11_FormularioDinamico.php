<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <form action="" method="post">
            <?php

                $x = 1;
                while ($x<=5){
                    echo "Valor $x: <input type='number' name='valor$x' value='v$x'></br>";
                    $x++;
                }

            ?>
            <input type="submit" value="Enviar">

        </form>

        <br>

        <?php

            $x = 0;
            while ($x<5){
                $v[$x] = isset($_POST["valor$x"]) ? (int)trim($_POST["valor$x"]) : 0;
                echo "Valor $x é: $v[$x] </br>";
                $x++;
            } 

        ?>
    </div> 
</body>
</html>