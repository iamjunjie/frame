<?php
// 加载目录常量文件 dirpath.php
require_once CONF_PATH . DS . 'dirpath.php';

// 加载工具 tool/Helper.php
require_once TOOL_PATH . 'Helper.php';

// 加载conf目录所有配置文件
CORE\TOOL\Helper::loadDirFile(CONF_PATH);

// 加载core目录所有核心文件
CORE\TOOL\Helper::loadDirFile(CORE_PATH);

// 加载app目录所有文件
CORE\TOOL\Helper::loadDirFile(APP_PATH);