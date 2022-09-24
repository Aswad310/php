<?php
    $value = 123;

############ Equality  ############
    /* (only value will be true) */
    echo "Equality == <br>";
    if($value == 123.0){
        echo "True {$value}<hr>";
    }

############ Identity  ############
    /* (Value and data type must be true) */
    echo "Identity === <br>";
    if($value === 123.0){
        echo "True {$value}";
    }
?>