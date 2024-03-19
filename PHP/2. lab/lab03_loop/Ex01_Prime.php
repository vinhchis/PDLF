<?php

function isPrimeNUmber($n){
    if($n < 2):
        return false;
    else:
        $squareRoot = sqrt($n);
        for($i = 0; i <= $squareRoot; $i++):
            if($n % $i ==0){
                return false;
            }
        endfor;
    endif;
    return true;
}