<?php
// 定义目录分隔符常量
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
// 定义根目录常量
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__) . DS);
}
// 定义配置目录常量
if (!defined('CONF_PATH')) {
    define('CONF_PATH', ROOT_PATH . 'conf' . DS);
}

// 加载路由文件
require_once ROOT_PATH  . 'core' . DS . 'route' . DS . 'Route.php';

// 路由调度
$router = new \CORE\ROUTE\Route();
$router->dispatch();