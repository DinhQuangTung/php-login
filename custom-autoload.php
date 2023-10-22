<?php

spl_autoload_register('customAutoloaderController');

function customAutoloaderController(string $className): void
{
    $class_path = str_replace('\\', '/', $className);
    $file = __DIR__ . '/' . $class_path . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}
