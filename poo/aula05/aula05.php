<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <pre>
        <?php
            require_once "ContaBanco.php";

            $p1 = new ContaBanco();
            $p2 = new ContaBanco();

            $p1->abrirConta("cc");
            $p1->setDono("Jubileu");
            $p1->setNumConta(1111);

            $p2->abrirConta("cp");
            $p2->setDono("Cleusa");
            $p2->setNumConta(2222);

            $p1->depositar(300);
            $p2->depositar(500);

            $p2->sacar(100);

            $p1->pagarMensal();
            $p2->pagarMensal();

            $p2->sacar(1000);

            $p1->fecharConta();
            $p2->fecharConta();

            $p1->sacar(338);
            $p2->sacar(530);

            $p1->fecharConta();
            $p2->fecharConta();
            
            print_r($p1);
            print_r($p2);
        ?>
    </pre>
</body>
</html>
