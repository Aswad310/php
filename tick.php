<?php
############ declare - ticks ############
function onTick(){
    echo 'Tick<br/>';
}

register_tick_function('onTick');

declare(ticks=2);

for($x=0 ; $x<10 ; $x++){
    echo $x.'<br>';
}
?>