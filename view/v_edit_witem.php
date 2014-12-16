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
	



    require_once('view/v_header.php');
    $viewitem->display("template/edit_witem.tpl");
    require_once('view/v_footer.php');