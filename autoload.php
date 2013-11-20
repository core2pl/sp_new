<?php

function core2Autoload($class) {
    if (strpos($class, 'core\\') === false) {
        $file = __DIR__.'\vendor\\'.$class.'.class.php';
    } else {
        $file = __DIR__.'\\'.$class.'.class.php';
    }
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    try {
        if (is_file($file) ) {
            require $file;
            return true;
        }
    } catch (Exception $e) {
        throw new Exception('Class '.$class.' not found!');
    }
}

spl_autoload_register('core2Autoload');