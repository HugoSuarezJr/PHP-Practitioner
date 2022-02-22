<?php

use App\Core\{Router, Request};

require 'functions.php';
require 'vendor/autoload.php';

require 'core/bootstrap.php';

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());