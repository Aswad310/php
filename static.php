<?php
############ Static Keyword ############
    /* The static keyword is also used to declare variables in a function
    which keep their value after the function has ended. */
    function increment(){
        static $n = 0;
        $n++;
        return $n;
    }

    /* Calling function */
    echo increment(); // 1
    echo '<br/ >';
    echo increment(); // 2
    echo '<br/ >';
    echo increment(); // 3
    echo '<br/ >';
?>