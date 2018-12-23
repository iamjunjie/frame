<?php
namespace CORE\ROUTE;

/**
 * 路由入口
 */
class Route
{
    /**
     * 构造函数
     */
    public function __construct()
    {
        // 加载自动加载文件 conf/autoload.php
        require_once CONF_PATH . 'autoload.php';
    }

    /**
     * 路由调度
     */
    public function dispatch()
    {
        die('dispatch success');
    }
}