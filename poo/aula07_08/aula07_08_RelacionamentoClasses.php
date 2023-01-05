<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>
        pre{
            font-size:16px;
        }
    </style>
</head>
<body>
    <pre>
        <?php
            require_once "Lutador.php";
            require_once "Luta.php";

            $L = array();

            $L[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2 , 1);
            $L[1] = new Lutador("Putscript", "Brasil", 29 , 1.68, 57.8, 14, 2 , 3);
            $L[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2 , 1);
            $L[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $L[4] = new Lutador("Ufobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $L[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            echo"</br>";
            
            // foreach ($L as $key => $l){

            //     $l->apresentar();  echo"</br>";
            //     $l->status();      echo"</br>";
                
            // }
                   
            // $L[3]->apresentar();  echo"</br>";
            // $L[3]->perderLuta();
            // $L[3]->apresentar();  echo"</br>";

            $UEC01 = new Luta();
            $UEC01->marcarLuta($L[2], $L[3]);
            $UEC01->lutar();

        ?>
    </pre>
</body>
</html>