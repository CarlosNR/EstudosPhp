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

        //Polimorfismo:mesmo nome representa varios comportamentos diferentes

        //assinatura de método: quantidade e tipos de parametros, nome dos atributos podem mudar, saida do metodo, também

        //php n pede tipo de metodo nem variavel

        //polimorfismo de sobreposição: Quando substituimos um método de uma superclasse na sua subclasse, usando a mesma assinatura

        require_once "Mamifero.php";
        require_once "Canguru.php";
        require_once "Cachorro.php";
        require_once "Tartaruga.php";
        
        $A["m"] = new Mamifero();
        $A["c"] = new Canguru();
        $A["k"] = new Cachorro(); 
        $A["t"] = new Tartaruga();

        // $A["m"]->setPeso(5.7);
        // $A["m"]->setIdade(8);
        // $A["m"]->setMembros(4);
        $A["m"]->locomover();
        // $A["m"]->alimentar();
        $A["m"]->emitirSom(); 

        // $A["c"]->setPeso(55.3);
        // $A["c"]->setIdade(3);
        // $A["c"]->setMembros(4);
        $A["c"]->locomover();
        // $A["c"]->alimentar();
        $A["c"]->emitirSom(); 

        // $A["k"]->setPeso(3.94);
        // $A["k"]->setIdade(5);
        // $A["k"]->setMembros(4);
        $A["k"]->locomover();
        // $A["k"]->alimentar().
        $A["k"]->emitirSom(); 

        $A["t"]->locomover();

        foreach ($A as $key => $a){
            echo "</br>"; print_r($a); 
        }

    ?>
</body></pre>
</html>
