<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
            
            echo "</br>while(){}";
            $x = 10;

            while ($x>=0){
                echo $x."</br>";
                $x--;
            }
            
            echo "<br>";

            $x=0;
            while ($x<=10){
                echo $x."</br>";
                $x++;
            }

            //do while
            echo "</br>do {} while()";
            $c = 10;
            do{
                echo "<br>$c";
                $c--;
            }while($c>0);

            //for
            echo "</br></br> for";
            for($x=0;$x<10;$x+=1.5){
                echo "</br>$x";
            }

        ?>
    </div> 

</body>
</html>
