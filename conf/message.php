<?php
/**
 * 自定义消息
 * 
 * 1000 => [
 *      'inside' => '给研发看',
 *      'outside' => '给用户看',
 * ]
 */
$GLOBALS['error_message'] = [
    // 通用消息
    1000 => ['inside' => 'request code 200！', 'outside' => '请求成功！'],
    1001 => ['inside' => 'request code 500！', 'outside' => '网络异常！'],

    // 文件消息
    2000 => ['inside' => '文件路径不正确！', 'outside' => '网络异常，导致文件加载失败！'],
];