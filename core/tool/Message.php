<?php
namespace CORE\TOOL;

use CORE\TOOL\Helper;

/**
 * 助手类
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
        $msgs = Helper::getArrVal($GLOBALS['error_message'], $code);
        return (IS_DEBUG ? $msgs['inside'] : $msgs['outside']);
    }
}