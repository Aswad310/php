<?php
    
    $family = [
        'Thom' => [
            'Roomate' => 'Shane'
        ],

        'Andy' => [
            'Cousin' => 'Michelle', 
            'Mother' => 'Sophy'
        ],

        'Jwall' => [
            'Friend' => 'Chunk',
        ],
    ];

    // foreach 
    foreach($family as $key => $value) {
        foreach($value as $key_relation => $value_person){
            echo "'{$key}' have a '{$key_relation}' named '{$value_person}'<hr>";
        }
    }
?> 