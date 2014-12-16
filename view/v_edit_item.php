<?php
	require_once('../smarty/libs/Smarty.class.php');
    header("Content-Type:text/html;charset=utf-8");


    $item_title='fexix';
    $item_img='resource\banana.jpg';
    $item_type='fruit';
    $item_detail='awful fruit';
    $item_price='0.00';
    $viewitem = new smarty();


    $viewitem->assign("items_title",$item_title);
	$viewitem->assign("item_type",$item_type);
	$viewitem->assign("item_detail",$item_detail);
	$viewitem->assign("item_img",$item_img);
	$viewitem->assign("item_price",$item_price);



    require_once('view/v_header.php');
    $viewitem->display("template/edit_item.tpl");
    require_once('view/v_footer.php');