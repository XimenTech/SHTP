<?php
	require_once('../smarty/libs/Smarty.class.php');
	header("Content-Type:text/html;charset=utf-8");
	$main = new smarty();
	
	GLOBAL $action;
	$action = "hotitem";
	require_once('controller/c_item.php');
	$c_item = new c_item();
	$c_item->invoke();
	$action = "newitem";
	$c_item->invoke();
	

	GLOBAL $page_title;
	$page_title="主页";

	GLOBAL $hotitem_main;
	GLOBAL $newitem_main;
	$main->assign("hotitem_main",$hotitem_main);
	$main->assign("newitem_main",$newitem_main);

	require_once('view/v_header.php');
	$main->display("template/main.tpl");
	require_once('view/v_footer.php');
?>