<?php
namespace CORE\TOOL;

use CORE\TOOL\Message;

/**
 * 助手类
 */
class Helper
{
    /**
     * 加载目录文件
     *
     * @param string $dirpath 目录路径
     */
    public static function loadDirFile($dirpath)
    {
        $pathfiles = scandir($dirpath);
        if(!empty($pathfiles)) {
            foreach ($pathfiles as $key => $filename) {
                if (!in_array($filename, ['.', '..'])) {
                    self::loadFile($dirpath . $filename);
                }
            }
        }
    }

    /**
     * 加载文件
     *
     * @param string $filepath 文件路径
     * @return void
     */
    public static function loadFile($filepath)
    {
        if (!file_exists($filepath)) {
            throw new \Exception(Message::getMessage(2000) . "【{$filepath}】");
        }
        require_once $filepath; 
    }

    /**
     * 获取数组值
     *
     * @param array $arr 数组
     * @param mixed $key 键名
     * @param mixed $default 默认值
     * @return mixed
     */
    public static function getArrVal($arr, $key, $default = null)
    {
        $val = $default;
        if (isset($arr[$key])) {
            $val = $arr[$key];
        }
        return $val;
    }
}