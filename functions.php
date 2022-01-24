<?php

function cleanDump($data){
    echo '<pre>';
    die(var_export($data, true));
    echo '</pre>';
}

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}