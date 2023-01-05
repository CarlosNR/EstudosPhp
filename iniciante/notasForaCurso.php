<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
   
    <title>Notas mais atuais q o curso</title>
</head>
<body>
    <?php
        
        $x = 5;
        $y = 3;

        //potencia
        $resp = $x**$y; 
        echo $resp."<br>";

        //operador navezinha
        $resp = $x <=> $y;                   echo $resp;
        // retorna 0 se forem iguais
        // retorna -1 se o primeiro eh MENOR
        // retorna 1 se o primeiro eh MAIOR
    ?>
</body>
</html>