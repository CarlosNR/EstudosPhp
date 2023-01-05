<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iniciante/estilo.css">
</head>
<body>
    <div>
        <?php
            $sexo = isset($_POST["sexo"]) ? trim($_POST["sexo"]) : "[Sem sexo]";
            $nome = isset($_POST["nome"]) ? trim($_POST["nome"]) : "[Não informado]";
            $idade = isset($_POST["idade"]) ? (int)trim($_POST["idade"]) : 0;
        
            if ($sexo === "homem"):
                $sexo = "um homem";
            elseif ($sexo === "mulher"):
                $sexo = "uma mulher";
            endif;
            
            // funciona dos 2 jeitos
            // if ($sexo === "homem"){
            //     $sexo = "um homem";
            // }elseif ($sexo === "mulher"){
            //     $sexo = "uma mulher";
            // }

            if ($idade != 0)
                $idade = date("Y") - $idade;

            echo "Então... teu nome é $nome, tens $idade anos e tu é $sexo, correto?";
        ?>
        
        </br>

        <form action="../../html/iniciante/aula08_FormCompleto.html">
            <input type="submit" value="Voltar" />
        </form>
            
        <!-- <a href="../../html/iniciante/aula08.html">
            <button>Voltar</button>
        </a> -->
    </div> 

    


</body>
</html>
