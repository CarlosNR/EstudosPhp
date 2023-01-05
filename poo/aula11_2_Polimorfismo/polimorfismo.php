<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body><pre>
    <?php
    
        //polimorfismo de sobrecarga: varias funções com mesmo nome na mesma classe (nao funciona em php)
        require_once "Cachorro.php";

        $c = new Cachorro();

        $c->reagirFrase("olá");
        $c->reagirFrase("Vai apanhar");
        $c->reagirHora(11, 45);
        $c->reagirHora(21, 00);
        $c->reagirDono(true);
        $c->reagirDono(false);
        $c->reagirIdade(2, 12.5);
        $c->reagirIdade(17, 4.5);

    ?>
</body></pre>
</html>