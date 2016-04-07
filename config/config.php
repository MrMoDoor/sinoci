<?php

// 引入 初始配置
require_once dirname(BASEPATH).'/application/config/config.php';

// 配置 composer 自动加载
$config['composer_autoload'] = TRUE;

// 配置 日志目录
$config['log_path'] = APPPATH.'storage/logs/';

// 配置 错误提示模版目录
$config['error_views_path'] = dirname(BASEPATH).'/application/views/errors/';

// 配置 缓存目录
$config['cache_path'] = APPPATH.'storage/cache/';
