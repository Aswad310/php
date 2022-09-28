<?php
    $lang = [
        'PHP' => [
            'creator' => 'Rasmus Lerdorf',
            'version' => [
                ['version' => 8.0, 'releaseData' => 'Nov 26, 2022'],
                ['version' => 1.2, 'releaseData' => 'Nov 23, 2022'],
            ]
        ],

        'Python' => [
            'creator' => 'Guido van Rossum',
            'version' => [
                ['version' => 2, 'releaseData' => 'Sep 26, 2022'],
                ['version' => 3, 'releaseData' => 'Sep 23, 2022'],
            ]
        ],
    ];

    // foreach loop
    foreach ($lang as $key => $value){ echo "<hr>";
        foreach ($value as $key_relation => $val) {
            foreach ((array) $val as $key_version => $v) {
                echo "{$key} have {$key_relation} {$key_version}". json_encode($v) . "<br>";
            }
        }
    }

    echo '<pre><hr>';
    print_r($lang['PHP']);
    echo '</pre> <hr/>';

    echo $lang['PHP']['creator'].'<hr>';
    echo $lang['PHP']['version'][0]['version'].'<hr>';  
?>