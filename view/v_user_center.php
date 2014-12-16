<?php
	header("Content-Type:text/html;charset=utf-8");

	require_once('../smarty/libs/Smarty.class.php');

	GLOBAL $myitem_main;

	//$item_title=$myitem_main[0]['item_title'];
	//$item_detail=$myitem_main[0]['item_detail'];
	//$item_viewtime=$myitem_main[0]['item_viewtime'];

	
	$witem_title='自行车';
	$witem_detail='能用就行';
	$witem_viewtime='20';



	$avatar=HEADPORTRAIT_PATH.$_SESSION['user_avatar'];
	$name=$_SESSION['user_name'];
	$qq=$_SESSION['user_qq'];
	$phone=$_SESSION['user_phone'];
	$address=$_SESSION['user_address'];


	$user_center = new smarty();


	$user_center->assign("myitem_main",$myitem_main);
	//$user_center->assign("item_title",$item_title);
	//$user_center->assign("item_detail",$item_detail);
	//$user_center->assign("item_viewtime",$item_viewtime);

	$user_center->assign("witem_title",$witem_title);
	$user_center->assign("witem_detail",$witem_detail);
	$user_center->assign("witem_viewtime",$witem_viewtime);

	$user_center->assign("avatar",$avatar);
	$user_center->assign("name",$name);
	$user_center->assign("qq",$qq);
	$user_center->assign("phone",$phone);
	$user_center->assign("address",$address);

	GLOBAL $page_title;
	$page_title="我的二手";

	require_once('view/v_header.php');
	$user_center->display("template/user_center.tpl");
	$user_center->display("template/footer.tpl");
