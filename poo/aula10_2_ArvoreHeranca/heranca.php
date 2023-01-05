<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body><pre>
    <?php
        require_once "Pessoa.php";
        require_once "Visitante.php";
        require_once "Aluno.php";
        require_once "Bolsista.php";
        require_once "Tecnico.php";
        require_once "Professor.php";
        require_once "Funcionario.php";

        //Pessoa é classe abstrata, vai dar ruim
        // $P[0] = new Pessoa();
        $P["v"] = new Visitante();
        $P["v"]->setNome("Juvenal");
        $P["v"]->setIdade(33);
        $P["v"]->setSexo("M");
        
        $P["a"] = new Aluno();
        $P["a"]->setNome("Pedro");
        $P["a"]->setMatricula(1111);
        $P["a"]->setIdade(16);
        $P["a"]->setSexo("M");
        $P["a"]->setCurso("Informática");
        $P["a"]->pagarMensalidade();

        $P["b"] = new Bolsista();
        $P["b"]->setMatricula(1112);
        $P["b"]->setNome("Jubileu");
        $P["b"]->setBolsa(12.5);
        $P["b"]->setCurso("ADM");
        $P["b"]->setIdade(17);
        $P["b"]->pagarMensalidade();

        foreach ($P as $key => $p){
            print_r($p); echo "</br>";
        }

    ?>
</body></pre>
</html>