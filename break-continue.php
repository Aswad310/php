<?php
############ break ############
    echo "without Break<br>";
    for ($i=0; $i<= 10; $i++) { 
        echo $i.'<br>';
    }
    
    echo "<br>";
    echo "with goto<br>";
    for ($i=0; $i<= 10; $i++) { 
        if($i==5){
            break;
        }
        echo $i.'<br>';
    }
        
    echo "I am out of for Loop";

############ continue ############
    echo '<hr>Continue<br>';
    $x=0;
    for($i = 0; $i < 5; $i++){
        if ($i == 2){
            continue;
        }            
        print "$i<br>";
    }
?>