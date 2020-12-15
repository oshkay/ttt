// Test for commit
<?php
spl_autoload_register(function($classname) {
    $classname = str_replace('\\','/', $classname);
    require_once(__DIR__ . "/${classname}.php");
});

//spl_autoload_register();

use MVC\Controllers\Controller;
echo "112";
$obj = new Controller('users/1.html');
echo "111";
echo $obj->render();
