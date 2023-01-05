<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div><pre>

    <?php

        require_once "Pessoa.php";
        require_once "Aluno.php";

        $P[0] = new Pessoa("Pedro", 30 , "M");
        $P[1] = new Aluno("Maria", 15, "F", 3015,"Informatica");


        foreach ($P as $key => $p){
          print_r($p); echo "</br>";
        }

    ?>


</div></pre>
</body>
</html>
