<?php
include('includes/Dbh.inc.php');
include('includes/User.inc.php');
include('includes/ViewUser.inc.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PL | Training</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="purelogics-logo.jpeg">
</head>

<body>

    <h2 style="text-align: center;">Aswad Ali - <span style="color: #14f595;">PureLogics</span> </h2>

    <?php
        // string position
        $name = "Aswad Ali";
        $y= strpos($name , 's');

        // Operators
        $res = $y===false ? 's not found0' : 's found at index ['.$y.']<hr>';
        echo $res;   
        
        // Null coalescing
        $i = NULL;
        $j = $i ?? 'hello';
        echo $j;
       
    ?>
</body>
</html>