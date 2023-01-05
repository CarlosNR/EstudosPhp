<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body><pre>
    <?php
        require_once "Pessoa.php";
        require_once "Aluno.php";
        require_once "Professor.php";
        require_once "Funcionario.php";

        //Não tem erro nenhum, bug do inteliphense
        $P[0] = new Pessoa();
        $P[1] = new Aluno();
        $P[2] = new Professor();
        $P[3] = new Funcionario();

        $P[0]->setNome("Pedro");
        $P[1]->setNome("Maria");
        $P[2]->setNome("Claudio");
        $P[3]->setNome("Fabiana");
        
        $P[0]->setNome("Pedro");
        $P[1]->setNome("Maria");

        //Não tem erro nenhum, bug do inteliphense
        $P[1]->setCurso("Informática");
        $P[2]->setSalario(2500.75);
        $P[3]->setSetor("Estoque");

        $P[0]->setSexo("M");
        $P[3]->setSexo("F");

        foreach ($P as $key => $p){
            print_r($p);
        }

        //vai da ruim, funções de classes erradas
        // $P[0]->receberAum(550.20);

        //vai da ruim
        // $P[1]->mudarTrabalho();

        //vai da ruim
        // $P[3]->setSetor("Estoque");

    ?>
</body></pre>
</html>