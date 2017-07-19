<?php
session_start();
spl_autoload_register(function ($className) {
    $classPath = str_replace('\\', '/', $className);
    $classPath = 'class/' . $classPath . '.php';
    require $classPath;
});

if (!isset($_GET['page']) && !isset($_GET['action'])) {
    $_GET['page'] = 'intro';
    $_GET['action'] = 'landing';
}

$page = $_GET['page'];
$page = strtolower($page);
$page = ucfirst($page);
$page .= 'Controller';
$page = 'controller\\' . $page;

$action = $_GET['action'];
$action = strtolower($action);
$action = ucfirst($action);
$action = 'action' . $action;

if (!class_exists($page)) {
    header('Location: http://localhost/social-network/index.php?page=error&action=notFound');
    die;
}

$controller = new $page();

if (!method_exists($controller, $action)) {
    header('Location: http://localhost/social-network/index.php?page=error&action=notFound');
    die;
}
$controller->$action();