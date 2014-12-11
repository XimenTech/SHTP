<?php
	require_once('../smarty/libs/Smarty.class.php');
    header("Content-Type:text/html;charset=utf-8");

	
    $item_title = '香蕉';
    $item_id = '123456';
    $item_status = '1';
    $item_img = 'resource\banana.jpg';
    $item_type = 'food';
    $item_detail = 'delicious fruit';
    $item_owner_qq = '**********';
    $item_owner_phone = '**********';
    $item_owner_address = '*********';
    $item_viewtime = '4';
    $item_dttm = '2014/11/11';
    $item_price = '1.00';
	$viewitem = new smarty();

	$viewitem->assign("items_title",$item_title);
	$viewitem->assign("item_id",$item_id);
	$viewitem->assign("item_status",$item_status);
	$viewitem->assign("item_img",$item_img);
	$viewitem->assign("item_type",$item_type);
	$viewitem->assign("item_detail",$item_detail);
	$viewitem->assign("item_owner_qq",$item_owner_qq);
	$viewitem->assign("item_owner_phone",$item_owner_phone);
	$viewitem->assign("item_owner_address",$item_owner_address);
	$viewitem->assign("item_viewtime",$item_viewtime);
	$viewitem->assign("item_dttm",$item_dttm);
	$viewitem->assign("item_price",$item_price );

	$viewitem->display("template/view_item.tpl");