<?php
############ include ############
/* The include expression includes and evaluates the specified file. */
/* File not find ~ Warning */
include('test.php');

############ include_once ############
/* if the code from a file has already been included, it will not be included again */
/* File not find ~ Warning */
include_once('test.php');

############ require ############
/* File not find ~ fatal level error */
require('test.php');

############ require_once ############
/* if the code from a file has already been included, it will not be included again */
require_once('test.php');
?>