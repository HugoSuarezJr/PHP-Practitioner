<?php

require 'functions.php';

$database = require 'bootstrap.php';

$tasks = $database->selectAll('todos');

cleanDump($tasks);
// dd($tasks);

require 'index.view.php';