<?php
                //ao passar o array, recebe a pos automaticamente
                // array, pos do array, ++$index === 1
    function funcao1 (&$val, $chave, $aux){
        $val = $aux . '.' . $val;
        $index++;

    }

    function funcao2($arr){
        array_walk($arr,'funcao1',++$index);
        return $arr;
    }

    $index = 5;
    echo json_encode(funcao2(
        ['Brasil', 'RS', 'Rio Grande'] //$arr
    ));

?>

<?php
            //ao passar o array, recebe a pos automaticamente
    function funcao3 ($val, $chave){
        echo "$val na pos $chave";
    }

    $a = ['a','b','c'];
    echo"<br><br><br><br><br>";
    array_walk($a,'funcao3');

?>