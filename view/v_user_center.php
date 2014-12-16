<?php
	header("Content-Type:text/html;charset=utf-8");

	require_once('../smarty/libs/Smarty.class.php');

	$item_title='滑板鞋';
	$item_detail='我的滑板鞋，时尚时尚最时尚！';
	$item_viewtime='44';

	$witem_title='自行车';
	$witem_detail='能用就行';
	$witem_viewtime='20';


	$name='felix';
	$qq='123456@qq.com';
	$phone='13872193043';
	$address='四川成都';


	$user_center = new smarty();

	$user_center->assign("item_title",$item_title);
	$user_center->assign("item_detail",$item_detail);
	$user_center->assign("item_viewtime",$item_viewtime);

	$user_center->assign("witem_title",$witem_title);
	$user_center->assign("witem_detail",$witem_detail);
	$user_center->assign("witem_viewtime",$witem_viewtime);

	$user_center->assign("name",$name);
	$user_center->assign("qq",$qq);
	$user_center->assign("phone",$phone);
	$user_center->assign("address",$address);

	GLOBAL $page_title;
	$page_title="我的二手";

	require_once('view/v_header.php');
	$user_center->display("template/user_center.tpl");
	$user_center->display("template/footer.tpl");
