<?php

function dumper($data){
    echo '<pre>';
    var_dump($data);
        echo '</pre>';
    }

function bouncer($age){
    if($age >= 21){
        echo "<h1>Welcome to the party &#128526</h1>";
    } else {
        echo "<h1>Sorry bud, maybe next time &#129335</h1>";
    }
}