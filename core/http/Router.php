<?php
namespace CORE\HTTP;

use CORE\HTTP\Request;
use CORE\CONTROLLER\BaseController;

/**
 * 路由入口
 */
class Router
{
    /**
     * 路由调度
     */
    public static function dispatch()
    {
        $uri = Request::getControl();
        $obj = BaseController::getController($uri['controller']);
        $func = $uri['method'];
        $params = Request::getQueryString();
        $obj->$func($params);
    }
}