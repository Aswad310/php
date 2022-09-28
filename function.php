<?php
declare(strict_types=1);

############ Function ############
    function foo(){
        echo "Function Foo!";
    }
    /* Calling function */
    foo();

############ Function using return ############
    function doo(){
        return "Function Doo!";
    }
    /* Calling function */
    $x = doo();
    echo '<hr />'.$x;  
    
############ Function with data types ############
    function koo(): string{
        return 'aswad';
    }
    /* Calling function */
    echo '<hr />'.koo();

############ Function Parameters ############
function mul(int|float $x = 0, int|float $y = 0) {
    return $x + $y;
}
    /* Calling function */
    echo '<hr />'.mul(10, 20);

?> 