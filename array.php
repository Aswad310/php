<?php
    // Array 
    $languages = ['PHP', 'Java', 'Python', 'C'];

    // Size of Array
    $array_size = count($languages);
    echo "Array Size: " . $array_size . '<hr>';
    
    // Print array values using for loop
    for($i=0; $i<$array_size; $i++){
        echo $languages[$i].'<br>';
    } echo '<hr>';

    // print array using print_r 
    echo '<pre>';
    print_r($languages);
    echo '</pre> <hr>';

    // array_push used to push values to already defined array
    array_push($languages, 'Ruby', 'Javascript');

    // array_pop used to return and remove last index value 
    echo 'POP Value: ' . array_pop($languages).'<hr>';

    // array_shift used to return and remove start index value
    echo 'Shift Value: ' . array_shift($languages).'<hr>';

    // print_r array
    echo '<pre>';
    print_r($languages);
    echo '</pre> <hr>';

    // Size of Array
    $array_size = count($languages);
    echo "Array Size: " . $array_size . '<hr>';

    // print_r array
    echo '<pre>';
    var_dump($languages);
    echo '</pre> <hr>'; 

    // crazay a> d [] => e )rray
    $crazy_array =[
        true => 'a', 
        1=>'b', 
        '1'=>'c', 
        1.8 => 'd',
        null => 'e',
    ]; 

    echo '<pre>';
    print_r($crazy_array);
    echo '</pre> <hr>';

    // Array Operators
    $arr1 = ["a" => "apple", "b" => "banana"];
    $arr2 = ["a" => "pear", "b" => "strawberry", "c" => "cherry"];
    $arr3 = $arr1==$arr2;
    
    echo '<pre>';
    var_dump($arr3);
    echo '</pre><hr>';

    ############ Control Performance Issues  ############
    $alpha = ['a', 'b', 'c', 'd'];

    for($x=0, $lenght=count($alpha); $x<$lenght ; $x++){
        echo $alpha[$x].'<br>';
    }

?> 