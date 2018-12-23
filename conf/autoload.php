<?php
// 加载目录常量文件 dirpath.php
require_once CONF_PATH . DS . 'dirpath.php';

// 加载工具 tool/Helper.php
require_once TOOL_PATH . 'Helper.php';

// 加载配置文件
CORE\TOOL\Helper::loadDirFile(CONF_PATH);

// 加载所有工具文件
CORE\TOOL\Helper::loadDirFile(TOOL_PATH);