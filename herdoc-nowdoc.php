<?php

    $x = 10;
    $y = 20;

    // Heredoc 
    $test = <<<TEXT
    Line 1 $x    
    Line 2 $y    
    Line 3
    TEXT;

    echo nl2br($test);

    echo '<hr>';
    
    // Nowdoc
    $test = <<<'TEXT'
    Line 1 $x    
    Line 2 $y    
    Line 3
    TEXT;

    echo nl2br($test);

?>