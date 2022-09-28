<?php
############ Time ############ 
    $currentTime = time();

/* UNIX Timestamp */
    echo "UNIX Timestamp:<br />";

    echo $currentTime.'<br />';

/* Shows Time upcoming, 5th day */   
    echo $currentTime + 5*24*60*60 .'<br />';

/* Shows Yesterday Time*/   
    echo $currentTime + 60*60*24 .'<hr />';

############ Date ############ 
    echo "Current DATE & TIME is: ".date('m/d/Y g:ia', ) . '<br />';

    echo "After 5 days DATE & TIME will be: ".date('m/d/Y g:ia', $currentTime + 5*24*60*60) . '<br />';

    echo "Yesterday DATE & TIME was: ".date('m/d/Y g:ia', $currentTime + 60*60*24) . '<br />';

    echo '<hr />';

############ Date & Time ############

/* Current timezone */
    echo "Current Timezone: ".date_default_timezone_get().'<hr />';

/* according to UTC timezone */
    date_default_timezone_set('UTC');

    echo "UTC Timezone: <br />";
    
    echo "Current DATE & TIME is: ".date('m/d/Y g:ia', ) . '<br />';

    echo "After 5 days DATE & TIME wManual Date & Time */ ".date('m/d/Y g:ia', $currentTime + 60*60*24) . '<br />';

/* timezone after change */
    echo "Current Timezone: ".date_default_timezone_get().'<hr />';
?>