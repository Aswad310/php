<?php
############ match ############
    $name = "Aswad Ali";

    $return_name = match($name){
        'Aswad Ali' => 'aswad',
        'Ahmed' => 'ahmed',
        'Ali' => 'ali',
        default => 'wrong name',
    };

    echo $return_name;
    
    /* match vs switch  
    
        match =>  strict comparison (===)
        switch => loose comparison (==)
    
    */
?>