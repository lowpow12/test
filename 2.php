<?php

function fib($a){
    return fib($a-1)+fib($a);
}

$sum = 0;
$a = (int)readline('Enter an integer: ');
if($a==0){
    echo "0";
}

elseif($a>=1){
    echo "0 1 ";
    $c = fib($a);
    echo $c;
    
}
