<?php
namespace CORE\TOOL;

/**
 * 数组操作类
 */
class Arr 
{
    /**
     * 获取数组值
     *
     * @param array $arr 数组
     * @param mixed $key 键名
     * @param mixed $default 默认值
     * 
     * @return mixed
     */
    public static function getVal($arr, $key, $default = null)
    {
        $val = $default;
        if (isset($arr[$key])) {
            $val = $arr[$key];
        }
        return $val;
    }
}
