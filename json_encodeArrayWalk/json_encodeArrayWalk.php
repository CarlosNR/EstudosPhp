<?php
    echo "<pre>";

    $arrayClientes = [
        'clientes' => [
            [
                'id' => 1,
                'nome' => 'Marcos'
            ],

            [
                'id' => 1,
                'nome' => 'Fulano'
            ],

            
        ]
    ];

    function imprimeSem($valor) {
        print_r ($valor);
    }

    function imprimeCom($valor) {
        echo"</br></br>com json_encode</br>";
        print_r (json_encode($valor));
    }

    
    echo"print_r puro </br></br>";
    array_walk ($arrayClientes['clientes'],"imprimeSem");
    echo"</br></br></br>";
    echo"print_r com json_encode </br>";
    array_walk ($arrayClientes['clientes'],"imprimeCom");

    echo "</br></br></br>";
    echo json_encode('valor da var nula: '.$var); //retorna null
    echo "</pre>";
    $x = null;
    $x++;
    echo "Valor da nula++ é: $x"; //retorna 1
    echo "</br>";
    if(null === 0){
        echo "sao iguais";
    }else{
        echo "sao diferentes";
    }

?>