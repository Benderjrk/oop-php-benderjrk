<?php 

spl_autoload_register('theeAutoLoader');

function theeAutoLoader($className) {
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

?>