<?php

function validarValor($numero){
    //função tem prioridade no try catch
        try {
            if ($numero > 10) {
                throw new \Exception("O número deve ser maior que 3", 3);
            }
        }catch(\Exception $e) {
            echo"<pre> FUNCAO ";
            print_r($e->getMessage());
            echo "</br>";
            print_r($e->getCode());
            echo "</br>";
            print_r($e);
            echo"</pre>";
        }
        //como n tem exit, aparece o catch e o sucesso
        
    }   

    try{
        //tentativa de execução


        //verifica existencia
        if(!isset($_GET['numero'])){

            throw new \Exception("O nº não foi definido",1);

        }

        //verifica tipo
        if(!is_numeric($_GET['numero'])){

            throw new \Exception("O valor não é numérico",2);

        }

        //verifica valor com função
        validarValor($_GET['numero']);

        echo "Sucesso :)";

    }catch(\Exception $e){

        //exceção
        echo"<pre>";
        print_r($e->getMessage());
        echo "</br>";
        print_r($e->getCode());
        echo "</br>";
        print_r($e);
        echo"</pre>"; 
        //para o fluxo
        exit;

    }
?>