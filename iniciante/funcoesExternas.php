<?php

    function somaExterna(){

        $p = func_get_args();
        $tot = func_num_args();

        $soma = 0;
        $cont = 0;

        while($cont < $tot){
            $soma += $p[$cont];
            $cont++;
        }

        return $soma;  
    }
    
?>