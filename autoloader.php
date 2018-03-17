<?php

spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $file = explode('\\', $className);
    $location = "";
    $count = count($file);
    foreach ($file as $part) {
        if ($count > 1) {
            $location .= $part .= '/';
        } else {
            $location .= $part .= '.php';
        }
        $count--;
    }
    if (file_exists($location)) {
        require $location;
    }
}