<?php
	header("Content-Type:text/html;charset=utf-8");

	require_once('../smarty/libs/Smarty.class.php');

	
	$h1='校园二手交易市场';
	$title_name='用户中心';
	$my_info='tanghuian';

	$user_center = new smarty();


	$user_center->assign("h1",$h1);
	$user_center->assign("title_name",$title_name);
	$user_center->assign("my_info",$my_info);
	$user_center->display("template/user_center.tpl");
