<?php
    $path = 'hello.txt';
    
    if(! file_exists($path)){
        echo "File Not Found!";
        return;
    }

############ fopen() ############
    $file = fopen('hello.txt', 'r');

############ fgets() ############
    while(($line = fgets($file)) != false){
        echo $line . '<hr />';
    }

############ fgetcsv() ############
    while(($line = fgetcsv($file)) != false){
        print_r($line) . '<hr />';
    }

############ fclose() ############
    fclose($file);

############ file_get_contents() - into variables ############
    $content = file_get_contents('hello.txt'); 
    $content = file_get_contents('hello.txt', offset:3, length:2); 
    echo $content;

############ file_put_contents() ############
    file_put_contents('hello.txt', 'My name is Aswad2!', FILE_APPEND); 

############ unlink() ############
    unlink('del.txt');

############ copy() ############
    copy('hello.txt','del.txt');

############ copy() ############
    rename('del.txt','hello2.txt');

############ pathinfo() ############
    echo '<pre>';
        print_r(pathinfo('./hello.txt'));
    echo '<pre>';
?>