<?php

/*function*/
    function x(){
        sleep(1);
        echo "Done<br>";
        return 3;
    }   

############ if statement  ############
/* Don't call function inside if statement */
    if(x() === 1){
        echo "1";
    }elseif(x() === 2){
        echo "2";
    }elseif(x() === 3){
        echo "3";
    }else{
        echo "4";
    }

echo "<hr>";
/* Performance measure */  
    $x = x();
        if($x === 1){
            echo "1";
        }elseif($x === 2){
            echo "2";
        }elseif($x === 3){
            echo "3";
        }else{
            echo "4";
        }  
    echo "<hr>";

############ switch statement  ############
    switch(x()){
        case 1:
            echo 1;
            break;
        case 2:
            echo 2;
            break;
        case 3:
            echo 3;
            break;
        default:
            echo 4;
    }
?>