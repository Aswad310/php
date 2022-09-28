<?php
############ set_error_handler() ############
    function errorHandler(int $type, string $msg, ?string $file = null, ?int $line = null){
        echo $type . ': ' . $msg . ' in ' . $file . ' on line ' . $line;
        exit;
    }

    /* Sets a user-defined error handler function */
   
    set_error_handler('errorHandler', E_ALL);    

    echo $x;

    /* 
        Notice: 
        set_error_handler() => overwrite other ERROR HANDLING settings    
    
        PARSE and COMPILE ERRORS cannot be handle using 
    */
?>