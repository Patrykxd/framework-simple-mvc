<?

define("DS", DIRECTORY_SEPARATOR);

include_once "system" . DS . "config" . DS . "config.php";
include_once AUTOLOAD_PATH . "autoloader.php";
include_once AUTOLOAD_PATH . "route.php";



if ($_GET['route']) {
    if (isset($_route[$_GET['route']])) {
        $route = $_route[$_GET['route']][0];
    } else {
        $route = 'ControllerError';
    }
    if (isset($_route[$_GET['route']])) {
        $method = $_route[$_GET['route']][1];
    } else {
        $method = 'index';
    }
} else {
    $route = 'ControllerCore';
    $method = 'view';
}

$body = new $route();
$data = $body->$method();


