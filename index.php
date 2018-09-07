<?php

require __DIR__.'/vendor/autoload.php';

require __DIR__.'/config/app.php';

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
switch ($request_uri[0]) {
    // Home page
    case '/home':
        require 'resources/views/welecom.php';
        break;
    case '/':
        require 'resources/views/welecom.php';
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        require 'resources/views/welecom.php';
        break;
}






