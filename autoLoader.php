<?php
function autoLoader($className){
    $className = ltrim($className, '\\');
    $fileName = '';
    $path = '';

    if ($lastRS = strrpos($className, '\\')) {
        $path = substr($className, 0, $lastRS);
        $className = substr($className, $lastRS + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $path) . DIRECTORY_SEPARATOR;
    }
    
    $fileName .= $className . '.php';
    require $fileName;
}

spl_autoload_register('autoLoader');
?>
