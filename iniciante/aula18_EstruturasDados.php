<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>

        <?php
            $vet = array(3,5,8,2);
            $vet2 = $vet;


            echo "array_push() add elemento na ultima pos";
            array_push($vet,7);

            echo "<pre>";
                print_r($vet);
            echo "</pre>";
            
            echo "array_pop() add elemento na ultima pos";
            array_pop($vet);

            echo "<pre>";
                print_r($vet);
            echo "</pre>";

            // array_unshift() ADICIONA elemento na primeira pos
            echo "array_unshift() add elemento na primeira pos";
            array_unshift($vet, 9);

            echo "<pre>";
                print_r($vet);
            echo "</pre>";

            // array_shift() REMOVE elemento da primeira pos
            echo "array_shift() remove elemento da primeira pos";
            array_shift($vet);

            echo "<pre>";
                print_r($vet);
            echo "</pre>";

            // sort() ordena elementos do vetor, funciona para nº e ordem alfabética
            echo "sort() ordena elementos do vetor";
            sort($vet);

            echo "<pre>";
                print_r($vet);
            echo "</pre>";

            // rsort() ordena elementos do vetor de traz pra frente, funciona para nº e ordem alfabética
            echo "rsort() ordena elementos do vetor, de traz pra frente";
            rsort($vet);

            echo "<pre>";
                print_r($vet);
            echo "</pre>";

            // asort() ordena elementos do vetor, mas não ordena posições, funciona para nº e ordem alfabética
            echo " a_sort() ordena elementos do vetor mas não as posições";
            asort($vet2);

            echo "<pre>";
                print_r($vet2);
            echo "</pre>";

            // arsort() ordena elementos do vetor, de tras pra frente, mas não ordena posições, funciona para nº e ordem alfabética
            echo " ar_sort() ordena elementos do vetor mas não as posições";
            arsort($vet2);

            echo "<pre>";
                print_r($vet2);
            echo "</pre>";

            $vet3[3] = "C";
            $vet3[2] = "E";
            $vet3[0] = "H";
            $vet3[1] = "B";
            $vet4 = $vet3;

            // k_sort() ordena as posições, mas não os elemento, funciona para nº e ordem alfabética
            
            echo " k_sort() ordena as posições, mas não os elementos";

            echo "<pre>";
                print_r($vet3);
            echo "</pre>";  

            ksort($vet3);
            echo "vira: </br>";
            echo "<pre>";
                print_r($vet3);
            echo "</pre>";

            // kr_sort() ordena as posições, de traz pra frente, mas não os elemento, funciona para nº e ordem alfabética
            
            echo " kr_sort() ordena as posições, de traz pra frente, mas não os elementos";

            krsort($vet4);
            echo "<pre>";
                print_r($vet4);
            echo "</pre>";

             
        ?>

    </div> 

</body>
</html>
