<?php
    spl_autoload_register('theeAutoLoader');

    function theeAutoLoader($className) {
        $path = "classes/";
        $extension = ".class.php";
        $fullPath = $path . $className . $extention;

        // error handeling 
        if (!file_exists($fullPath)) {
            return false;
        }

        include_once $fullPath;
    }
?>