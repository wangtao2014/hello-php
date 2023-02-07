<?php

// require "vendor/autoload.php";
require __DIR__ . '/vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('my_monolog.log', Level::Warning));

// add records to the log
$log->warning('Foo', array(1, 2, 3, 4, 5));
$log->error('Bar', array('hello', 'world', 'Php'));