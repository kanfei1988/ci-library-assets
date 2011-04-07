<?php

// js路径
$config['js_path'] = 'assets/js/';

// css路径
$config['css_path'] = 'assets/css/';

// 自动加载的js脚本
$config['js'] = array(
	'jquery.js',
	'jquery.cookie.js',
	'jquery-ui-1.8.11.custom.min.js',
	'jquery-ui-timepicker-addon.js',
	//array('kindeditor/kindeditor.js', '', 'charset="utf-8"'),
	'jquery.textarea.js'
);

// 自动加载的css脚本
$config['css'] = array(
	'theme.css',
	'theme4.css',
	'redmond/jquery-ui-1.8.11.custom.css',
	array('style.css', '', 'media="all"'),
	//array('jquery.treeview.css', 'assets/js/treeview')
);

?>