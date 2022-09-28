<?php
/* importing helper function */
require('./helper.php');

############ array_chunk() ############
/* Split an array into chunks */
    $items = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
    echo "<strong>Array Chunk</strong>";
    prettyPrintArray(array_chunk($items, 2, true));

############ array_combine() ############
    $arr1 = [2, 4, 6]; 
    $arr2 = [8, 10, 12];  
    echo "<strong>Array Combine</strong>";  
    prettyPrintArray(array_combine($arr1, $arr2));

############ array_filter() ############
/* filtering even numbers from array name $num*/
    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9 ,10];
    $even = array_filter($num, fn($value)=>$value%2==0, ARRAY_FILTER_USE_BOTH); // prints actual key
    echo "<strong>Array Filter</strong>";
    prettyPrintArray($even);

############ array_values() ############
    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9 ,10];
    $even = array_filter($num, fn($value)=>$value%2==0);
    $even = array_values($even); // re-arrange key from [0]-index
    echo "<strong>Array Values</strong>";
    prettyPrintArray($even);

############ array_filter() without arrow functioecho "<strong>Array Key</strong>";
    $even = array_values($even);
    echo "<strong>Array Filter</strong>";
    prettyPrintArray($even);

############ array_keys() ############
    $arr = ['a'=>5, 'b'=>10, 'c'=>15, 'd'=>5, 'e'=>10];
    $keys = array_keys($arr, 5, true); /* array - filterValue - strict*/
    echo "<strong>Array Key</strong>";
    prettyPrintArray($keys);

############ array_map() ############
    $val = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $tableof3 = array_map(fn($num)=> $num*3, $val);
    echo "<strong>Array Map</strong>";
    prettyPrintArray($tableof3);    

############ array_map() - multiple arrays ############
    $arr1 = ['a'=>1, 'b'=>2, 'c'=>3];
    $arr2 = ['d'=>5, 'e'=>6, 'f'=>7];
    $mul = array_map(fn($a1, $a2)=> $a1*$a2, $arr1, $arr2);
    echo "<strong>Array Map - Multiple Arrays</strong>";
    prettyPrintArray($mul);   
    
############ array_merge() ############
    $arr1 = [2, 4, 6, 8];
    $arr2 = ['a'=>10, 'b'=>12, 'c'=>14];
    $arr3 = [10, 12];
    $merged = array_merge($arr1, $arr2, $arr3);
    echo "<strong>Array Merge</strong>";
    prettyPrintArray($merged);

############ array_reduce() ############
    $invoiceItems = [
        ['price' => 9.99,   'qty' => 3, 'desc' => 'Item 1'],
        ['price' => 29.99,  'qty' => 1, 'desc' => 'Item 2'],
        ['price' => 149,    'qty' => 1, 'desc' => 'Item 3'],
        ['price' => 14.99,  'qty' => 2, 'desc' => 'Item 4'],
        ['price' => 4.99,   'qty' => 4, 'desc' => 'Item 5'],
    ];
    $total = array_reduce($invoiceItems, fn($sum, $item) => $sum + $item['qty'] * $item['price'], 500);
    echo "<strong>Array Reduce</strong> <br />";
    echo $total.'<hr />';

############ array_search() ############
    $array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];
    $key = array_search('b', $array);
    if($key==false){
        echo "Value Not Find";
    }
    echo "<strong>Array Search</strong> <br />";
    echo $key.'<hr />';

############ in_array() ############
    $array = ['sd', 'b', 'c', 'D'];
    $key = array_search('a', $array);
    echo "<strong>In Array</strong> <br />";
    if(!in_array('a', $array)){
        echo "Value Not Find";
    }
    echo $key.'<hr />';

############ array_diff_key() ############
    $array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    $array2 = ['d' => 4, 'g' => 5, 'i' => 6, 'j' => 7, 'k' => 8];
    $array3 = ['l' => 3, 'm' => 9, 'n' => 10];

    echo "<strong>Array Difference</strong>";
    prettyPrintArray(array_diff($array1, $array2, $array3));
    echo "<strong>Array Difference Key</strong>";
    prettyPrintArray(array_diff_key($array1, $array2, $array3));

############ sort ############
    $array = [2, 4, 6, 8, 10];
/* asort() */
    asort($array);
    echo "<strong>Array asort</strong>";
    prettyPrintArray($array);
/* ksort() */
    ksort($array);
    echo "<strong>Array ksort</strong>";
    prettyPrintArray($array);
/* usort */
    usort($array, fn($a, $b)=> $b <=> $a);
    echo "<strong>Array usort</strong>";
    prettyPrintArray($array);

############ Destructive Array ############
    $array = [2, 4, 6, 8];
    list($a, $b, $c, $d) = $array;
    echo "<strong>Destructive Array</strong> <br />";
    echo $a . ' ' . $b . ' ' . $c . ' ' . $d;
?>