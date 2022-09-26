<?php
declare(strict_types=1);

############ Variadic Function ############
    function sum(int|float ...$numbers): int|float{
        return array_sum($numbers);
    } 
        /* Calling function */
        $values = [2, 3, 1, 4, 3, 12];
        echo sum(...$values).'<hr />';

############ Named Arguments ############
    function div(int|float $x, int|float $y ){
        return $x / $y;
    } 
        /* Calling function */
        $x = 5;
        $y = 2;
        echo div(y: $y, x: $x).'<hr>';   // named arguments

############ Named Associative Arguments ############
    function sub(int|float $x, int|float $y): float{
        return $x - $y;
    } 
        /* Calling function */
        $x = 5;
        $y = 2;
        
        $values = ['x'=>100, 'y'=>23];
        echo sub(...$values);
?>