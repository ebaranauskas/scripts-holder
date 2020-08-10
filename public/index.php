<?php

declare(strict_types=1);

namespace App;

ini_set('display_errors', '1');
error_reporting(-1);

define('APP_DIR', dirname(__DIR__));
define('DS', DIRECTORY_SEPARATOR);

spl_autoload_register(function (string $class) {
    require APP_DIR . DS . 'src' . DS . preg_replace('~\W+~', DIRECTORY_SEPARATOR, $class) . '.php';
});

(new Application(require APP_DIR . DS . 'cfg' . DS . 'cfg.php'))->run();
