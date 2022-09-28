<?php
############ error_reporting() ############
/* Sets which PHP errors are reported */

/* 0 => Error Display None */ 
    error_reporting(0);

/* E_ALL => Show all type of ERRORS */ 
    error_reporting(E_ALL); 

/* E_ALL => Show all type of ERROR's except WARNINGs */ 
    error_reporting(E_ALL & ~E_WARNING); 

    // echo aswad;

############ trigger_error() ############
/* Generates a user-level error/warning/notice message */
    
    trigger_error('Example error', E_USER_ERROR);

    echo 1;

############ error_log() ############
/* Send an error message to the defined error handling routines */
    
    // error_log();
?>