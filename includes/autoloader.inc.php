<?php 

spl_autoload_register('classAutoLoader');

function classAutoLoader($className) {
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;
    echo 'added class:';
    var_dump($fullPath);
    // error handeling 
    if (!file_exists($fullPath)) {
        return false;
    }
    
    include_once $fullPath;
}

spl_autoload_register('abstractAutoLoader');

function abstractAutoLoader($abstractName) {
    $path = "abstract/";
    $extension = ".abstract.php";
    $fullPath = $path . $abstractName . $extension;
    echo 'added abstract:';
    var_dump($fullPath);
    // error handeling 
    if (!file_exists($fullPath)) {
        return false;
    }
    
    include_once $fullPath;
}

?>