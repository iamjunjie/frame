<?php
namespace CORE\TOOL;

use CORE\TOOL\Arr;

/**
 * 消息类
 */
class Message
{
    /**
     * 根据消息码获取消息内容
     *
     * @param int 错误码
     * 
     * @return string
     */
    public static function getMessage($code)
    {
        $msgs = Arr::getVal($GLOBALS['messages'], $code);
        return (IS_DEBUG ? $msgs['inside'] : $msgs['outside']);
    }
}