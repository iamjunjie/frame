<?php
// webroot 目录
if (!defined('WEBROOT_PAHT')) {
    define('WEBROOT_PAHT', ROOT_PATH . 'webroot' . DS);
}

// webroot/css 目录
if (!defined('CSS_PAHT')) {
    define('CSS_PAHT', WEBROOT_PAHT . 'css' . DS);
}

// webroot/img 目录
if (!defined('IMG_PAHT')) {
    define('IMG_PAHT', WEBROOT_PAHT . 'img' . DS);
}

// webroot/js 目录
if (!defined('JS_PAHT')) {
    define('JS_PAHT', WEBROOT_PAHT . 'js' . DS);
}

// core 目录
if (!defined('CORE_PAHT')) {
    define('CORE_PAHT', ROOT_PATH . 'core' . DS);
}

// core/database 目录
if (!defined('DATABASE_PAHT')) {
    define('DATABASE_PAHT', CORE_PAHT . 'database' . DS);
}

// core/route 目录
if (!defined('ROUTE_PAHT')) {
    define('ROUTE_PAHT', CORE_PAHT . 'route' . DS);
}

// core/tool 目录
if (!defined('TOOL_PAHT')) {
    define('TOOL_PAHT', CORE_PAHT . 'tool' . DS);
}

// cache 目录
if (!defined('CACHE_PAHT')) {
    define('CACHE_PAHT', ROOT_PATH . 'cache' . DS);
}

// cache/logs 目录
if (!defined('LOGS_PAHT')) {
    define('LOGS_PAHT', CACHE_PAHT . 'logs' . DS);
}

// app 目录
if (!defined('APP_PAHT')) {
    define('APP_PAHT', ROOT_PATH . 'app' . DS);
}

// app/controller 目录
if (!defined('CONTROLLER_PAHT')) {
    define('CONTROLLER_PAHT', APP_PAHT . 'controller' . DS);
}

// app/model 目录
if (!defined('MODEL_PAHT')) {
    define('MODEL_PAHT', APP_PAHT . 'model' . DS);
}

// app/view 目录
if (!defined('VIEW_PAHT')) {
    define('VIEW_PAHT', APP_PAHT . 'view' . DS);
}