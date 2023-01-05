<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            // + publico: classe atual e todas outras classes têm acesso
            // # protegido: classe atual e todas sub-classes têm acesso
            // - privado: somenta classe atual tem acesso

            require_once "Caneta.php";

            $novo = new Caneta;
            $novo->modelo = "Bic";
            $novo->cor = "Azul";

            //vai dar ruim, nivel de acesso
            // $novo->t_ponta = 0.5;
            // $novo->carga = "cheia";
            // $novo->tampada = true;

            var_dump($novo);
            $novo->destampar();
            $novo->rabiscar();
            
        ?>
    </pre>
</body>
</html>