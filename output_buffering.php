<?php
############ Output Buffering(ob) ############    
/* Turn on output buffering */
    ob_start();
    include('./index.php');
    $nav = ob_get_clean(); /* Get current buffer contents and delete current output buffer */
    $nav = str_replace('About', 'About Purelogics', $nav);
    echo $nav;
?>

<div class="row m-4 p-4" style="text-align: justify;">
    <div class="col-4 ">
        <h2>Coloumn 1</h2>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et veniam odit nihil velit in aut magnam aspernatur veritatis vitae. Qui quos maxime cumque amet sed animi culpa quia. Pariatur, suscipit.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi quia, dolores magni, eveniet quam unde sunt iusto porro similique temporibus nisi sed! Sapiente, eaque quod non commodi repudiandae dicta placeat.
    </div>

    <div class="col-4 ">
        <h2>Coloumn 2</h2>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et veniam odit nihil velit in aut magnam aspernatur veritatis vitae. Qui quos maxime cumque amet sed animi culpa quia. Pariatur, suscipit.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi quia, dolores magni, eveniet quam unde sunt iusto porro similique temporibus nisi sed! Sapiente, eaque quod non commodi repudiandae dicta placeat.
    </div>

    <div class="col-4 ">
        <h2>Coloumn 3</h2>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et veniam odit nihil velit in aut magnam aspernatur veritatis vitae. Qui quos maxime cumque amet sed animi culpa quia. Pariatur, suscipit.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi quia, dolores magni, eveniet quam unde sunt iusto porro similique temporibus nisi sed! Sapiente, eaque quod non commodi repudiandae dicta placeat.
    </div>
</div>