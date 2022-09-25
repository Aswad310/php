<?php    
    $title="Math | Tables"; 
    include('index.php');
?>

<style>
    body {
        background-color: #212529;
        text-align: center;
    }
</style>

<table class="table table-dark table-striped ">
    <?php
        for($num=1 ; $num<=10 ; $num++){
            ?>
            <thead>
                <?php
                    if($num==1){
                        ?>
                            <tr>
                                <?php
                                    for($x=1 ; $x<=10 ; $x++){
                                        echo "<th>Table# {$x}</th>";
                                    }
                                ?>                                
                            </tr>
                        <?php
                    }
                ?>
            </thead>
            
            <tbody>
                <tr>          
                    <?php
                        for($i=1 ; $i<=10 ; $i++){                            
                            ?>
                            <td>
                                <?php
                                    $t = 2;
                                    echo "{$i}x{$num}=".$num*$i;
                                ?>
                            </td>
                            <?php
                        }
                    ?>
                </tr>
            </tbody>
            <?php
        }      
    ?>
</table>