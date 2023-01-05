<?php
    // Todo objeto tem atributo, metodo e estado
    // atributo -> variaveis
    // metodos -> funções
    // estado -> falores das variaveis

    // instancia -> quando tu usa a classe (molde) pra fazer o objeto em si

    require_once "Caneta.php";

    $novo = new Caneta;
    $novo->modelo = "Bic";
    $novo->cor = "azul";
    $novo->t_ponta = 0.5;
    $novo->carga = "cheia";

    $novo->destampar(); echo"</br>";
    $novo->rabiscar();  echo"</br>";

    $novo->carga = "vazia";
    $novo->rabiscar();  echo"</br>";

    $novo->tampar();    echo"</br>";
    $novo->rabiscar();

    echo "<pre>";
        echo print_r($novo);
    echo "<pre>";
?>