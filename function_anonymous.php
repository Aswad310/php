<?php
declare(strict_types=1);

############ Anonymous Function ############
    $sum = function (int ...$numbers): int{
        return array_sum($numbers);
    };
    echo $sum(1, 2, 3, 4).'<br />';

############ Anonymous Closure Function ############
    $x = 1;
    $add = function (int ...$numbers) use($x): int{
        echo $x.'<br />';
        return array_sum($numbers);
    };
    echo $add(1, 2, 3, 4);

############ Callback Function ############
    /* A callback function (often referred to as just "callback") is a function 
    which is passed as an argument into another function. */
    $array = [1, 2, 3, 4];

    // callback function
    function foo($element){
        return $element * 2;
    }

    $array2 = array_map('foo', $array);

    echo '<pre>';
        print_r($array);
    echo '</pre>';

    echo '<pre>';
        print_r($array2);
    echo '</pre>';

############ Arrow Function ############
    $array = [1, 2, 3, 4];

    // arrow function
    $array2 = array_map(fn($number) => $number * $number, $array);

    echo '<pre>';
        print_r($array2);
    echo '</pre>';
?>