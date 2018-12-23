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
        if (!empty($pathfiles)) {
            foreach ($pathfiles as $key => $filename) {
                if (in_array($filename, ['.', '..'])) {
                    continue;
                }
                $filename = trim($dirpath . $filename, DS);
                is_dir($filename) ? self::loadDirFile($filename . DS) : self::loadFile($filename);         
            }
        }
    }

    /**
     * 加载文件
     *
     * @param string $filepath 文件路径
     */
    public static function loadFile($filepath)
    {
        if (!file_exists($filepath)) {
            throw new \Exception(Message::getMessage(2000) . "【{$filepath}】");
        }
        require_once $filepath; 
    }
}