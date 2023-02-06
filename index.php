<?php
    // include "file1.php";
    // include "access_global.php";
    // include "dynamic_trait.php";
    // include "namespace_var.php";
    // include "namespace_self.php";
    // include "import_as.php";

    include "php_types.php";
    include "php_arrays.php";
    require "type_const.php";
    # require("super_globals.php");
    # require("magic_const.php");

    use PhpTypes as php_types;
    // php_types\type_boolean();
    // php_types\type_integer();
    // php_types\type_string();
    // php_types\type_null();
    // php_types\type_iter();
    // php_types\type_array();

    // array_define();

// require "vendor/autoload.php";
require __DIR__ . '/vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('my_monolog.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
