<?php
	require_once('../smarty/libs/Smarty.class.php');
	header("Content-Type:text/html;charset=utf-8");
	$index = new smarty();
	
	if(isset($_SESSION['user_id'])){
		$index->assign("sign",'1');
		$index->assign("user_name",$_SESSION['user_name']);
	}
	else{
		$index->assign("sign",'0');
	}

	$index->assign("page_title",$page_title);
	GLOBAL $hotitem_main;
	$index->assign("hotitem_main",$hotitem_main);
	$index->display("template/header.tpl");	
?>