<?php
namespace CORE\CONTROLLER;

use CORE\TOOL\Helper;

/**
 * 控制器基类
 */
class BaseController
{
    /**
     * 获取控制器对象
     * 
     * 
     */
    public static function getController($name)
    {
        $name = ucfirst($name) . 'Controller';
        return new $name();
    }
}
