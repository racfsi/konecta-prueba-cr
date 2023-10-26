<?php
date_default_timezone_set("America/Lima");
require_once './model/config.php';
//CALL CONFIG DB
$config = new Config;
//CALL CONTROLLER
if (!isset($_REQUEST['c'])) {
    header("Location: ?c=productos");
}
$controller = isset($_REQUEST['c']) ? $_REQUEST['c'] : '';
$accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
if ($controller != "ajax") {
    //CALL HEADER
    require_once 'controller/header.controller.php';
    $header = new HeaderController;
    //CALL CONTROLLER AND ACTION 
    if (isset($_REQUEST['c'])) {
        require_once 'controller/' . $controller . '.controller.php';
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        call_user_func(array($controller, $accion));
    }
    //CALL FOOTER
    require_once 'controller/footer.controller.php';
    $footer = new FooterController;
} else {
    require_once 'controller/' . $controller . '.controller.php';
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    call_user_func(array($controller, $accion));
}
