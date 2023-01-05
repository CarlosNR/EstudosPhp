<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php

            $vet = array(2,4,5,7);
            $vet[] = 9;

            print_r($vet); echo"</br>";

            // menor numero, maior numero, passo
            $vet2 = range(5,20,5);

            print_r($vet2); echo"</br>";
        ?>
        <pre>
            <table border="1"><tr>
                <?php
                    foreach ($vet2 as $valor){
                        echo "<td>$valor";
                    }
                ?>
            </table>
        </pre>
        <?php
            // vetor personalizado
            $v = array(
                1=>"A",
                3=>"B",
                "caçamba"=>"C",
                4=>"D"
            );
            
            // unset tira elemento por posição
            print_r($v); echo"</br>";
            unset($v[3]);
            print_r($v);
        ?>
    </div>
    <div>
        <?php
            echo "vetor associativo </br>";
            // chaves associativas
            $cad = array(
                "nome"  => "Carlos",
                "idade" => 28,
                "peso"  => "não interessa"
            );
            
            print_r($cad); echo"</br>";

            $cad["bebe"] = true; 

            print_r($cad); echo"</br>";

            foreach ($cad as $valor){
                echo "</br>$valor";
            }echo "</br>";

            // foreach pra vetor associativo
            foreach ($cad as $pos => $valor){
                echo "</br>A pos $pos tem o valor: $valor";
            }
        ?>
    </div>
    <div>
        <?php
            // matrizes
            echo "matrizes</br>";
            $mat = array(
                array(2,3),
                array(3,4),
                array(9,5)
            );

            $mat[2][0] = $mat[1][1];
            
            // print_r($mat);

            foreach ($mat as $y => $valorY){
                foreach ($valorY as $x => $valorX){
                    echo "</br>A pos $x tem o valor: $valorX";
                }
                echo "</br>";
            }


        ?>
    </div> 

</body>
</html>
