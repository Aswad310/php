<?php      
############ Null coalescing ############
    $i = NULL;
    $j = $i ?? 'hello';
    echo $j;      

/* string position */ 
    $name = "Aswad Ali";
    $y= strpos($name , 's');

/* Operators */
    $res = $y===false ? 's not found' : 's found at index ['.$y.']<hr>';
    echo $res;     
?>