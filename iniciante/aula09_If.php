<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
            $idade = isset($_POST["idade"]) ? trim($_POST["idade"]) : "[Sem idade]";
            $nome = isset($_POST["nome"]) ? trim($_POST["nome"]) : "[Anonimo]";
            
            $idade = date("Y") - $idade;

            if ($idade < 18){
                echo "Então... $nome, tu ainda não pode diriger e também não vota";
            }elseif($idade > 18 && $idade < 65){
                echo "Deixa de ser pobre e malandro, $nome, vai tirar uma carteira de motorista para poder votar";
            }else{
                echo "Olá sr(a) $nome, o lado bom é que não precisa mais votar, o lado ruim é que a renovação da carteira é anual";
            }
        ?>
        
        </br>

        <form action="../../html/iniciante/aula09.html">
            <input type="submit" value="Voltar" />
        </form>
            
        <!-- <a href="../../html/iniciante/aula08.html">
            <button>Voltar</button>
        </a> -->
    </div> 

    


</body>
</html>
