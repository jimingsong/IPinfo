<?php
	//时区定义 +8
	date_default_timezone_set("PRC"); 
	//定义项目绝对路径，如果不清楚请先访问check.php获取
	define("APP",dirname(__FILE__).'/');
	//页面utf8
	header("Content-type: text/html; charset=utf-8");
	//设置腾讯API
	define("LBSQQ","");

	//载入数据库类
	include_once(APP."class/Medoo.php");

	//初始化Medoo
    use Medoo\Medoo;
    $database = new medoo([
        'database_type' => 'sqlite',
        'database_file' => APP."data/ipinfo.db3"
    ]);
?>