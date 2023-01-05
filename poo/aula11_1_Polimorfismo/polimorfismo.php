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

        //vai da ruim
        // A[0]-> new Animal();
        require_once "Ave.php";
        require_once "Mamifero.php";
        require_once "Peixe.php";
        require_once "Reptil.php";
        
        $A["a"] = new Ave();
        $A["m"] = new Mamifero();
        $A["p"] = new Peixe();;
        $A["r"] = new Reptil();

        // $A["m"]->setPeso(85.3);
        // $A["m"]->setIdade(2);
        // $A["m"]->setMembros(4);
        $A["m"]->locomover();
        // $A["m"]->alimentar().
        // $A["m"]->emitirSom(); 

        // $A["p"]->setPeso(0.35);
        // $A["p"]->setIdade(1);
        // $A["p"]->setMembros(3);
        $A["p"]->locomover();
        // $A["p"]->alimentar().
        // $A["p"]->emitirSom(); 
        // $A["p"]->soltarBolha(); 

        // $A["a"]->setPeso(0.89);
        // $A["a"]->setIdade(2);
        // $A["a"]->setMembros(4);
        $A["a"]->locomover();
        // $A["a"]->alimentar().
        // $A["a"]->emitirSom(); 
        // $A["a"]->fazerNinho(); 
        

        foreach ($A as $key => $a){
            echo "</br>"; print_r($a); 
        }

    ?>
</body></pre>
</html>
