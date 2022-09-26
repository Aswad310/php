<?php
############ Global ############
    $x = 10;
    $y = 20;
    function sum(){
        global $x;
        global $y;
        return $x + $y;
    }
    echo sum().'<hr />';

############ $GLOBALS['var'] ############
    $i = 10;
    $j = 20;
    function add(){
        return $GLOBALS['i'] + $GLOBALS['j'];
    }
    echo add();
?>