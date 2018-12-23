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

// 加载自动加载文件 conf/autoload.php
require_once CONF_PATH . 'autoload.php';

// 路由调度
CORE\HTTP\Router::dispatch();