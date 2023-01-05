<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
    <?php require_once "funcoesExternas.php"; ?>
</head>
<body>
    <div>
        <?php
            //passagens por valor
            
            //função
            function subtracao($x,$y){
                return $x-$y;
            }

            //procedimento
            function soma($x,$y){
                echo ($x+$y);
            }

            // unica diferença é a presença ou n do return
            
            //gambiarra a la php
            function multiplicacao(){

                // pega todos os argumentos da função e soca num vetor
                $arg = func_get_args();

                // retorna nº de argumentos passados
                $total = func_num_args();

                $cont = 0;
                $multi = 1;

                while ($cont < $total){
                    $multi *= $arg[$cont];
                    $cont++;
                }
                echo "</br>$multi</br>";
            }

            //passagem for referencia
            function teste(&$x){
                $x += 2;
                echo $x;
            }

            //rotinas externas


            // "main"
            $result = subtracao(4,3);
            echo "$result</br>";

            soma(4,3);

            multiplicacao(3,3,2);

            $testado = 3;
            echo "$testado</br>";
            teste($testado);

            //função externa ao arquivo
            $result = somaExterna(5,5,5);
            echo "</br>$result</br>"

        ?>
        <!-- volte 1 pg do histórico de navegação -->
        </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div> 

</body>
</html>
