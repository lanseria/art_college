<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_LAYOUT_ITEM'      =>  '{__CONTENT__}', // 布局模板的内容替换标识
    'LAYOUT_ON'             =>  true, // 是否启用布局
    'LAYOUT_NAME'           =>  'layout', // 当前布局名称 默认为layout
    'DEFAULT_MODULE'        =>  'Home',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称
    'UPLOAD_SITEIMG_QINIU' => array ( 
    	'maxSize' => 5 * 1024 * 1024,
    	'rootPath' => './',
    	'saveName' => array ('uniqid', ''),
    	'driver' => 'Qiniu',
    	'driverConfig' => array (
    		'secrectKey' => 'qCqor6YACn5ilyDtUXUD5OUkNhwcbR5xkHxufzkL', 
    		'accessKey' => 'yi6VkIGQhbFf5PGHDbP-VVXqMmo2McRcTGlq-lm0',
    		'domain' => 'art101.qiniudn.com',
    		'bucket' => 'art101', 
    		)
    	),
    );