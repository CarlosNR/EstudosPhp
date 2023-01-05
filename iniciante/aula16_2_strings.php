<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
            //strtolower
            // troca maiusculo por minusculo
            $nome = "Carlos Nunes";
            echo strtolower($nome)."</br>";

            //strtoupper
            // troca minusculo por maiusculo
            $nome = "Carlos Nunes";
            echo strtoupper($nome)."</br>";
            
            //ucfirst
            //poe primeira letra da primeira palavra em maiusculo
            $nome = "carlos nunes";
            echo ucfirst($nome)."</br>";

            //ucwords
            //poe primeira letra de cada palavra maiusculo
            $nome = "carlos nunes";
            echo ucwords($nome)."</br>";

            //strrev
            // palavra de tras pra frente
            $nome = "carlos";
            echo strrev($nome)."</br>";

            //strpos
            // localiza primeira letra da palavra na string (espaço conta, existe diferença entre maiusculo e minusculo)
            $txt = "To aprendendo php";
            echo strpos($txt, "php")."</br>";

            //stripos
            // localiza primeira letra da palavra na string (espaço conta)
            $txt = "To aprendendo php";
            echo stripos($txt, "PHP")."</br>";

            //substr_count
            // conta quantidade de substring na string (existe diferença de maiusculo e minusculo)
            $txt = "To aprendendo php no curso em video de php";
            echo substr_count($txt, "php")."</br>";
        ?>
    </div>
    <div>
        <?php
            //substr
            // cria uma sub string da posição inicial x andando y posições
            $txt = "Curso em video";
            echo substr($txt, 0, 5)."</br>";

            // pega da posição dada ateh o final
            echo substr($txt, 7)."</br>";

            // pega x ultimas letras: video
            echo substr($txt, -5)."</br>";

            // pega x ultimas letras, mas apenas y delas: video: vi
            echo substr($txt, -5, 2)."</br>";

            // pega x ultimas letras, e deleta y letras de traz pra frente: video: vide
            echo substr($txt, -5, -1)."</br>";

        ?>
    </div>
    <div>
        <?php
            //str_pad
            // faz string caber em determinado espaço: complementa na posição desejada com 30 caracteres, porém por alguma razao da natureza nao funciona com " " 
            // STR_PAD_RIGHT espaços a direita
            // STR_PAD_BOTH palavra no meio dos espaços
            // STR_PAD_LEFT espaços a esquerda
            $nome = "Ramos";

            $novo = str_pad($nome, 30, "-", STR_PAD_RIGHT);
            echo "Frase de teste com $novo para ver quantidade de caracteres a direita</br></br>";

            $novo = str_pad($nome, 30, "-", STR_PAD_BOTH);
            echo "Frase de teste com $novo para ver quantidade de caracteres em ambos os lados</br></br>";

            $novo = str_pad($nome, 30, "-", STR_PAD_LEFT);
            echo "Frase de teste com $novo para ver quantidade de caracteres a esquerda</br></br>";
        ?>
    </div>
    <div>
        <?php
            //str_repeat
            // repete string x vezes
            $txt = str_repeat("php ", 5);
            echo "O texto gerado foi $txt</br>";
            $txt = str_repeat("-", 20);
            echo "O texto gerado foi $txt</br>";

            //str_replace
            // troca substring em uma string por uma segunda substring desejada em TODAS as aparições
            $gosto = "Gosto de estudar adm";
            echo "$gosto</br>";

            $novogosto = str_replace("adm", "php", $gosto);
            echo "$novogosto</br>";

            // ignora diferença entre letra maiuscula e minuscula
            $novogosto2 = str_ireplace("PHP", "python", $gosto);
            echo "$novogosto2</br>";
        ?>
        <!-- volte 1 pg do histórico de navegação -->
        </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div> 

</body>
</html>
