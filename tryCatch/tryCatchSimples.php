<?php
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
        exit;

    }
?>