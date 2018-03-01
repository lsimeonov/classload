<?php

declare(ticks = 1);

if (!ini_get('date.timezone')) {
    ini_set('date.timezone', 'UTC');
}

foreach (array(__DIR__ . '/../../autoload.php', __DIR__ . '/../vendor/autoload.php', __DIR__.'/vendor/autoload.php') as $file) {
    if (file_exists($file)) {
        define('COMPOSER_AUTOLOAD', $file);

        break;
    }
}

unset($file);

if (!defined('COMPOSER_AUTOLOAD')) {
    fwrite(
        STDERR,
        'You need to set up the project dependencies using Composer:' . PHP_EOL . PHP_EOL .
        '    composer install' . PHP_EOL . PHP_EOL .
        'You can learn all about Composer on https://getcomposer.org/.' . PHP_EOL
    );

    die(1);
}

require COMPOSER_AUTOLOAD;
