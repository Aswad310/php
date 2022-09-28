<?php
    // Associative Array
    $languages = [
        'php' => '8.0',
        'python' => '4.1',
    ];

    echo '<pre>';
    print_r($languages);
    echo '</pre>';  echo '<hr>';

    // Push Associative Array
    $languages['javascript'] = '2.2' ;

    echo '<pre>';
    print_r($languages);
    echo '</pre><hr>' ; 
?>