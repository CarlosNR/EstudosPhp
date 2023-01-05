<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><pre>
    
    <?php
        require_once "Pessoa.php";
        require_once "Livro.php";

        $P[0] = new Pessoa("Pedro", 22, "M");   
        $P[1] = new Pessoa("Maria", 31, "F");

        $L[0] = new Livro("PHP Básico", "José da Silva", 300, $P[0]);
        $L[1] = new Livro("POO com PHP", "Maria de Souza", 500, $P[0]);
        $L[2] = new Livro("PHP Avançado", "Ana Paula", 800, $P[1]);
        
        $L[0]->abrir();
        $L[0]->folhear(-1);
        $L[0]->avançarPag();
        $L[0]->avançarPag();
        $L[0]->voltarPag();
        print_r($L[0]);

        foreach ($L as $key => $l){
            echo "</br>";   $l->detalhes(); 
        }
    ?>
  
</body></pre>
</html>