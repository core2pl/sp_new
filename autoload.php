<?php

function spAutoload($class) {
    if ($class == 'engine\PDO') return;
    $class = str_replace(array('\\', 'vendor\\', 'core\\'), array(DIRECTORY_SEPARATOR, '', ''), $class);
    $file = $class.'.class.php';
    try {
        if (is_file(__DIR__.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.$file) ) {
            require __DIR__.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.$file;
            return true;
        }
        if (is_file(__DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.$file)) {
            require __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.$file;
            return true;
        }
    } catch (Exception $e) {
        throw new Exception('Class '.$class.' not found!');
    }
}

spl_autoload_register('spAutoload');