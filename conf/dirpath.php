<?php
// webroot 目录
if (!defined('WEBROOT_PATH')) {
    define('WEBROOT_PATH', ROOT_PATH . 'webroot' . DS);
}

// webroot/css 目录
if (!defined('CSS_PATH')) {
    define('CSS_PATH', WEBROOT_PATH . 'css' . DS);
}

// webroot/img 目录
if (!defined('IMG_PATH')) {
    define('IMG_PATH', WEBROOT_PATH . 'img' . DS);
}

// webroot/js 目录
if (!defined('JS_PATH')) {
    define('JS_PATH', WEBROOT_PATH . 'js' . DS);
}

// core 目录
if (!defined('CORE_PATH')) {
    define('CORE_PATH', ROOT_PATH . 'core' . DS);
}

// core/database 目录
if (!defined('DATABASE_PATH')) {
    define('DATABASE_PATH', CORE_PATH . 'database' . DS);
}

// core/route 目录
if (!defined('ROUTE_PATH')) {
    define('ROUTE_PATH', CORE_PATH . 'route' . DS);
}

// core/tool 目录
if (!defined('TOOL_PATH')) {
    define('TOOL_PATH', CORE_PATH . 'tool' . DS);
}

// cache 目录
if (!defined('CACHE_PATH')) {
    define('CACHE_PATH', ROOT_PATH . 'cache' . DS);
}

// cache/logs 目录
if (!defined('LOGS_PATH')) {
    define('LOGS_PATH', CACHE_PATH . 'logs' . DS);
}

// app 目录
if (!defined('APP_PATH')) {
    define('APP_PATH', ROOT_PATH . 'app' . DS);
}

// app/controller 目录
if (!defined('CONTROLLER_PATH')) {
    define('CONTROLLER_PATH', APP_PATH . 'controller' . DS);
}

// app/model 目录
if (!defined('MODEL_PATH')) {
    define('MODEL_PATH', APP_PATH . 'model' . DS);
}

// app/view 目录
if (!defined('VIEW_PATH')) {
    define('VIEW_PATH', APP_PATH . 'view' . DS);
}