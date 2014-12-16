<?php
	require_once('../smarty/libs/Smarty.class.php');
	header("Content-Type:text/html;charset=utf-8");
	GLOBAL $action;
	$action = "hotitem";
	require_once('controller/c_item.php');
	$c_item = new c_item();
	$c_item->invoke();
	$index = new smarty();
	GLOBAL $page_title;
	$page_title="主页";
	require_once('view/v_header.php');
	$index->assign("page_title",$page_title);
	$index->display("template/main.tpl");
	require_once('view/v_footer.php');
?>