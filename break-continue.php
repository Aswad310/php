<?php

############ goto  ############
    // without Break
    echo "without Break<br>";
    for ($i=0; $i<= 10; $i++) { 
        echo $i.'<br>';
    }

    // comes to know that Break is deprecated 
    // goto is used instead of break

    // with 'goto'
    echo "<br>";
    echo "with goto<br>";
    for ($i=0; $i<= 10; $i++) { 
        if($i==5){
            goto end;
        }
        echo $i.'<br>';
    }
    end:
    echo "I am out of for Loop";


############ Continue  ############
    echo '<hr>Continue<br>';
    $x=0;
    for ($i = 0; $i < 5; $i++) {
        if ($i == 2){
            continue;
        }            
        print "$i<br>";
    }
?>