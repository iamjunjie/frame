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
        // 加载目录常量文件 dirconst.php
        require_once CONF_PATH . DS . 'dirconst.php';
        die(CONTROLLER_PAHT);
    }

    /**
     * 路由调度
     */
    public function dispatch()
    {
        echo 'abc';
        die;
    }
}
