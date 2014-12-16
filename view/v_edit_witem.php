<?php
	require_once('../smarty/libs/Smarty.class.php');
    header("Content-Type:text/html;charset=utf-8");


    $item_title='fexix';
    
    $item_type='fruit';
    $item_detail='awful fruit';
   
    $viewitem = new smarty();


    $viewitem->assign("items_title",$item_title);
	$viewitem->assign("item_type",$item_type);
	$viewitem->assign("item_detail",$item_detail);
	


$viewitem->display("template/header.tpl");
$viewitem->display("template/edit_witem.tpl");
$viewitem->display("template/footer.tpl");