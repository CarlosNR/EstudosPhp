<?php
echo phpversion();
class MenorDeIdadeException extends Exception{}

try {
    $aluno = [
        'nome' => 'João',
        'idade' => 15
    ];

    if ($aluno['idade'] < 18) {
        throw new MenorDeIdadeException("O aluno {$aluno['nome']} é menor de idade. Entrar em contato com o resposavel.");
    }

    echo "Inscrição realizada." ;
    }catch (Exception $e) {"Houve um problema na inscrição.";
    }catch (MenorDeIdadeException $e) {echo $e->getMessage();}


?>