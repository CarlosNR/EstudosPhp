<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

</head>
<body><pre>
    <?php

        require_once "Video.php";
        require_once "Gafanhoto.php";
        require_once "Visualizacao.php";
        
        echo "</br>";
        $O["v1"]    = new Video("aula 1 de poo");
        $O["v2"]    = new Video("aula 12 de php");
        $O["v3"]    = new Video("aula 15 de html5");
        $O["g1"]    = new Gafanhoto("Janinha", 25, "F", "Peste");

        $O["vis1"]  = new Visualizacao($O["g1"], $O["v3"]); //Janinha assiste html5
        $O["vis2"]  = new Visualizacao($O["g1"], $O["v2"]);// Janinha assiste poo

        $O["vis1"]->avaliar();

        print_r($O["vis1"]);
        // print_r($O["vis2"]);


        // foreach ($O as $key => $o){
        //     print_r($o); echo "</br>";
        // }


    ?>
</body></pre>
</html>