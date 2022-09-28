<?php
require('./helper.php');

$dir = scandir(__DIR__);

############ scandir(__DIR__) ############
    prettyPrintArray(scandir(__DIR__));

############ is_file() ############
    echo "is_file() <br />"; 
    var_dump(is_file($dir[3]));
    echo '<hr />';

############ is_dir() ############
    echo "is_dir() <br />";
    var_dump(is_dir($dir[1]));
    echo '<hr />';

############ mkdir() ############
    // mkdir('foo');

    // /* MAKE Recursive Folder */   clearstatcache();
############ rmdir() ############
    // rmdir('foo');

    // /* REMOVE Recursive Folder */
    // mkdir('foo/bar');

############ file_exists() ############
    if(file_exists('hello.txt')){
        echo filesize('hello.txt').'<hr />';
    } else{
        echo "File Not Found! <hr />";
    }  

############ file_put_contents() & clearstatcache() ############
// if(file_exists('hello.txt')){
//     echo filesize('hello.txt');
//     file_put_contents('hello.txt', 'Hello PHP World!');
//     clearstatcache();
// } else{
//     echo "File Not Found! <hr />";
// }  
?>