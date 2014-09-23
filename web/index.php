<?php 
// 屏蔽 $_SERVER['argv'] 未定义的警告
!isset($_SERVER['argv']) && $_SERVER['argv'] = array();

// 活动目录切换标示
define('STDIN', 1);

// 引入框架原生 index.php
include '../codeigniter/2.2.0/index.php';
?>