<?php
namespace CORE\HTTP;

use CORE\TOOl\Arr;

/**
 * 请求类
 */
class Request
{
    /**
     * 获取URI
     * 
     * @return string
     */
    public static function getRequestUri()
    {
        return Arr::getVal($_SERVER, 'REQUEST_URI');  
    }

    /**
     * 获取请求参数
     * 
     * @param string $name 参数名
     * 
     * @return mixed
     */
    public static function getQueryString($name = null)
    {
        parse_str(Arr::getVal($_SERVER, 'QUERY_STRING'), $val);
        if ($name) {
            $val = Arr::getVal($val, $name);
        }
        return $val;
    }

    /**
     * 获取控制器
     * 
     * @return string
     */
    public static function getControl()
    {
        $uri = trim(self::getRequestUri(), '/');
        if (!empty($uri)) {
            $uri = parse_url($uri);
            $uri = $uri['path'];
        } else {
            $uri = Arr::getVal($GLOBALS, 'routes');
            $uri = Arr::getVal($uri, 'default');
        }
        $uri = explode('/', $uri);
        return [
            'controller' => $uri[0],
            'method' => $uri[1],
        ];
    }
}