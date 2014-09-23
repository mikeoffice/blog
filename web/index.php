<?php 
isset($argv) AND $_SERVER['PATH_INFO'] = $_SERVER['REQUEST_URI'] = $argv[1];

// 屏蔽 $_SERVER['argv'] 未定义的警告
!isset($_SERVER['argv']) AND $_SERVER['argv'] = array();

// 活动目录切换标示
defined('STDIN') OR define('STDIN', 1);

// 引入框架原生 index.php
include dirname(dirname(__FILE__)).'/codeigniter/2.2.0/index.php';
?>