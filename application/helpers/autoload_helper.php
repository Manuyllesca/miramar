<?php 

/*el parametro $classname es el nombre de la clase a cargar*/
/*require "class.mysql.php";
require "class.timesession.php";
require "class.subirarchivo.php";
require "class.restrictaccess.php";
require "class.phpmailer.php";
require "class.cleansql.php";
require "class.checkskype.php";
require "class.accesousuarios.php";*/
function PHPAutoload($classname)
{
    //Can't use __DIR__ as it's only in PHP 5.3+
    $filename = dirname(__FILE__).DIRECTORY_SEPARATOR.'../third_party/class_files/'.'class.'.strtolower($classname).'.php';

    if (is_readable($filename)) {
       require $filename;
    }
}

if (version_compare(PHP_VERSION, '5.1.2', '>=')) {
    //SPL autoloading was introduced in PHP 5.1.2
    if (version_compare(PHP_VERSION, '5.3.0', '>=')) {
        spl_autoload_register('PHPAutoload', true, true);
    } else {
        spl_autoload_register('PHPAutoload');
    }
} else {
    //Fall back to traditional autoload for old PHP versions
    function __autoload($classname)
    {
        PHPAutoload($classname);
    }
}



?>