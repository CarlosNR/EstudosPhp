<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
            $p = "Leite";
            $pr = 4.5;
        
            // mata a necessidade de number_format() no echo
            // %s string 
            // %f float 
            // %d int 
            // %u int em modulo
            printf ("O %s custa R$ %.2f.</br>", $p, $pr);

            $v[0] = 4;
            $v[1] = 3;
            $v[2] = 8;

            print_r($v); echo "</br>";
            
            //criação inteligente de vetor
            $v2 = array (3,7,6,2,1,9);
            
            var_dump($v2); echo "</br>";
           
            $v2 = array (3,7,6,2,1,9);
            var_export($v2); echo "</br>";
            ?>
        </div>
        <div>
            <?php
            //wordwrap
            $txt = "Aqui temos um texto gigante criado pelo php e vai mostrar o funcionamento da funcao wordwrap";

            // quebra linha em 20 caracteres, <br> quebra linha html, \n quebra linha em codigo, false -> gera quebra por palavra, true -> quebra linha separando a palavra
            $res = wordwrap($txt, 20, "<br>\n", false);
            echo $res."</br>";

            //strlen comprimento de string
            echo "Tamanho de string com strlen: ".strlen($txt)."</br>";

            //trim remove espaço excessivo
            $nome = "   José da Silva   ";
            echo strlen($nome); echo"</br>";
            echo strlen(trim($nome)); echo"</br>";

            //ltrim remove espaço excessivo do inicio, rtrim remove do final
        ?>
    </div>
    <div>
        <?php
            //string word count
            // 0 conta palavras
            // 1 cria vetor com cada palavra é uma posição: ola mundo: [0] -> ola, [1] -> mundo
            // 1 cria vetor com cada palavra é uma posição, porém respeitando a quantidade de caracteres: ola mundo: [0] -> ola, [4]-> mundo
            // array por padrao nao tem os sinais ´ ` ^ ~ ç ¨ ª º
            
            $frase = "Vou estudar php ç";
            
            $cont = str_word_count($frase, 0);
            echo $cont."</br>";

            $cont = str_word_count($frase, 1, "ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº");
            print_r($cont); echo"</br>";

            $cont = str_word_count($frase, 2, "ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº");
            print_r($cont); echo"</br>";

            //explode
            //separa string em array de palavras
            $site = "curso em video";
            $vetor = explode(" ", $site);
            print_r($vetor); echo"</br>";

            //str_split
            //separa strings em array de letras
            $nome = "Maria Joana";
            $vetor = str_split($nome);
            print_r($vetor); echo"</br>";

            //implode() ou join()
            //junta palavras em uma unica string
            $vetor = array("Curso", "em", "video");

            $vetor = implode(" ", $vetor);
            echo "Vetor reconstruido com implode: $vetor</br>";

            //chr
            //da um codigo e retorna uma letra
            $codigo = 99;
            $letra = chr($codigo);
            echo "a letra de codigo $codigo é: $letra</br>";

            //ord
            // da a letra e pega o codigo
            
            $letra = "C";
            $codigo = ord($letra);
            echo "o codigo $codigo é da letra: $letra</br>";
        ?>
        <!-- volte 1 pg do histórico de navegação -->
        </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div> 

</body>
</html>
