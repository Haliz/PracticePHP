<?php


//require_once 'app/A.php';
//echo __DIR__;
//require_once '\classes\A.php';
require_once __DIR__."/vendor/autoload.php";
use app\A;

/*spl_autoload_register(function ($class)
{
    $fileName = str_replace("\\",DIRECTORY_SEPARATOR, $class) . ".php";
//    var_dump($fileName);
    require_once $fileName;
});*/
test();
new A();
new classes\A();

